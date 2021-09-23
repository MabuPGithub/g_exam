
-- Get all data of the highest paid employee:
SELECT Employees.ID, Employees.name, Employees.date_hired, Employees.department_id, Employees.salary_id, Departments.department, Salaries.salary
FROM Employees
INNER JOIN Departments
ON Employees.department_id = Departments.ID
INNER JOIN Salaries
on Employees.salary_id = Salaries.id
where salary_id = 3;
