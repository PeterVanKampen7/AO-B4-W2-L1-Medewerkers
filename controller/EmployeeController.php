<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', $employees);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('employee/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $data = ["name" => $_POST['name'], "age" => $_POST['age']];
    createEmployee($data);
    //2. Bouw een url op en redirect hierheen
    redirect("index");
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $employee = getEmployee($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('employee/update', $employee);
}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $data = [
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "age" => $_POST['age']
    ];
    updateEmployee($data);
    //2. Bouw een url en redirect hierheen
    redirect("index");
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $employee = getEmployee($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('employee/delete', $employee);
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteEmployee($id);
	//2. Bouw een url en redirect hierheen
    redirect("index");
}

function redirect($location){
    header("Location: ". URL . 'employee/' . $location);
}
?>