package main

import (
	"github.com/google/uuid"
)

type Nationallity struct {
	Nationallity_id   int    `json:"nationallity_id"`
	Nationallity_name string `json:"nationallity_name"`
	Nationallity_code string `json:"nationallity_code"`
}

type Customer struct {
	Cst_id          int           `json:"cst_id"`
	Nationallity_id *Nationallity `json:"nationallity_id"`
	Cst_name        string        `json:"cst_name"`
	Cst_dob         uuid.Time     `json:"cst_cst_dob"`
	Cst_phoneNum    string        `json:"cst_phonenum"`
	Cst_email       string        `json:"cst_email"`
}

type Family_List struct {
	Fl_id       int       `json:"fl_id"`
	Cst_id      *Customer `json:"cst_id"`
	Fl_relation string    `json:"fl_relation"`
	Fl_name     string    `json:"fl_name"`
	Fl_dob      string    `json:"fl_dob"`
}
