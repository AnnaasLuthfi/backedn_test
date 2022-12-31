const addButton = document.querySelector(".add");
const input = document.querySelector(".row")

function addInput() {
    const fl_nama = document.createElement("input")
    fl_nama.type="text";
    fl_nama.placeholder="masukan nama"

    const fl_dob = document.createElement("input")
    fl_dob.type="date";
    fl_dob.placeholder="masukan nama"

    const button = document.createElement("btn")
    button.className="delete";
    button.innerHTML="&items";

    const flex = document.createElement("div")
    flex.className("row")

    input.appendChild(flex)
    flex.appendChild(fl_nama)
    flex.appendChild(fl_dob)
    flex.appendChild(button)
}