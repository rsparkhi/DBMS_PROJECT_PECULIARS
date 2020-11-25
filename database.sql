-- create database softstar;
-- use softstar




-- dept_table

-- create table department(
-- dept_id varchar(10) NOT NULL UNIQUE,
-- dept_name varchar(30) NOT NULL UNIQUE,
-- dept_location varchar(30) NOT NULL,
-- -- emp_id varchar(10) NOT NULL UNIQUE,
-- primary key(dept_id)
-- );







-- employee_table

create table employees(
emp_id varchar(10) NOT NULL UNIQUE,
emp_name varchar(30) NOT NULL,
emp_email varchar(50) NOT NULL,
emp_mobile BIGINT NOT NULL,
post varchar(30) DEFAULT "Assistant_Software_Engineer",
-- manager_id varchar(10) NOT NULL UNIQUE,
hire_date date NOT NULL,
salary BIGINT DEFAULT "350000",
dept_id varchar(10) NOT NULL,
primary key(emp_id),
foreign key(dept_id) references department(dept_id)
);


-- salary_table

-- create table salary_grade(
-- grade int NOT NULL,
-- min_salary int,
-- max_salary int,
-- primary key(grade),
-- );


-- -- INSERTION CODE

-- insert into employees values(); --[FOR EMPLOYEES]

-- insert into department values(); --[FOR DEPARTMENT]

-- insert into salary_grade values(); --[FOR SALARY]



-- --DISPLAY CODE

-- select * from employee where (); --[EMPLOYEE]

-- select * from department where (); --[DEPARTMENT]


-- --JOINTS 

-- select (columns) 
from employees
inner join department 
on employee.dept_id= department.dept_id;

-- --GROUP BY

-- select dept_id, avg(salary) as avg_salary
-- from employee
-- group by dept_id;



