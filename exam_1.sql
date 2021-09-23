
-- Get all data of the highest paid employee:
SELECT Employees.ID, Employees.name, Employees.date_hired, Employees.department_id, Employees.salary_id, Departments.department, Salaries.salary
FROM Employees
INNER JOIN Departments
ON Employees.department_id = Departments.ID
INNER JOIN Salaries
on Employees.salary_id = Salaries.id
where salary_id = 3;

-- Get all employees that are hired from 2017-2018
SELECT * FROM Employees
WHERE date_hired BETWEEN '2017-01-01' AND '2018-12-31';

-- Get all employees that belongs to IT dept and hired 2018 onwards
SELECT * FROM Employees
WHERE department_id = 3
AND date_hired > '2018-01-01';
