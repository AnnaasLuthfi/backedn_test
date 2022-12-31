package main

import (
	"encoding/json"
	"log"
	"net/http"
	"sync"

	"github.com/gorilla/mux"
	"github.com/joho/godotenv"
)

func main() {
	if err := godotenv.Load(); err != nil {
		log.Fatal(err)
	}

	r := mux.NewRouter()

	r.HandleFunc("/api/v1/customers", addCustomer).Methods("POST")

	if err := http.ListenAndServe(":80", r); err != nil {
		panic(err)
	}

}

type autoInc struct {
	sync.Mutex
	id int
}

func (a *autoInc) ID() (id int) {
	a.Lock()
	defer a.Unlock()

	id = a.id
	a.id++
	return
}

func addCustomer(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")

	var ids autoInc

	db := connect()
	defer db.Close()

	customer := &Customer{
		Cst_id: ids.ID(),
	}

	_ = json.NewDecoder(r.Body).Decode(&customer)

	_, err := db.Model(customer).Insert()
	if err != nil {
		log.Print(err)
		w.WriteHeader(http.StatusAccepted)
		return
	}

	json.NewEncoder(w).Encode(customer)
}
