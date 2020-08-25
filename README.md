<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Change Logs



1. Routes : Views
    1. Added new Routes
    2. Added new Views and bind them with Routes
    3. Passed data from Route to View

2.  Controllers
    1. Add a new controller for "Customers"
    2. Bind CustomersController to Route
    3. Pass data from CustomersController to View
    
3.  Blade Layout
    1. Created a new layout.blade.php
    2. Add basic html layout with navigation and @yeild(‘content’)
    3. Replace ‘content’ with by blade view
    
4.  Model : MySQL
    1.  Configured MySQL in .env file
    2.  php artisan migrate
    3.  Created a new Model (with -m migrate option)
    4.  Modified migration script and added new column called "name"
    5.  php artisan migrate
    6.  Created new Customers via tinker
    7.  Fetch customersList via model in CustomersController.php and pass it to the View

5.  Model : Added a new customer via form
    1. Created a new <form> in customers.blade.php
    2. Added a new POST Route called Customers@store
    3. Added a new function store() to save/create new Customer in database via customer model

6.  Form Validation : Add Customer Form
    1. Added code in CustomersController to validate request data
    2. Added validation for required|min:3 for name field
    3. Display errors on view

7.  Customer Model : Add new "Email" field
    1. Add new email field in migration script
    2. Run php artisan migrate:rolback
    3. Run php artisan migrate
    4. Modify CustomerController to validate/save email field
    5. Modify customers.blade.php to add email field
    6. Move navigation html from layout.blade.php to nav.blade.php
    7. Add section for "title" tag

8.  Model : Eloquent Where Clause
    1. Added new field (dropdown active/inactive) in Customer migration script
    2. Run php artisan migrate:rolback
    3. Run php artisan migrate
    4. Added new dropdown field called "Active" with Active/Inactive options in customers.blade.php
    5. Modified CustomerController to validate/save active dropdown field value
    6. Modified view code to display two separate list one for Active Customer and another for Inactive Customer

9.  Eloquent Scopes & Mass Assignment
    1. Change the way we are storing form fields and saving model
    2. Resolve mass assignment error and disable it

10. 14 :: Eloquent : BelongsTo & HasMany Relationships
    1. Created a new model called "Company"
    2. Added new column "company_id" in Customer migration script
    3. Added functions in Customer.php and Company.php models to get related records
    4. Added "Company" dropdown on Customer form
    5. Display list of Company and their customers as nested list

11. 15 :: Eloquent Accessors & RESTful Controller
    1. Modify CustomerController as per RESTful documentation of Laravel
    2. Separate Customer List/Create views
    3. Other changes

12. 16 :: Eloquent Route Model Binding & RESTful Controller
    1) Created a new View called show.blade.php
    2) Make customer name as hyperlink to open detailView
    3) Fetch customer record using "Route Model Binding"

13. 16 :: Eloquent Route Model Binding & RESTful Controller
    1. Created a new View called show.blade.php
    2. Make customer name as hyperlink to open detailView
    3. Fetch customer record using "Route Model Binding"

14. 17 :: Eloquent Route Model Binding & RESTful Controller :: Edit / Update
    1. Edit Customer Form
    2. Edit Customer Controller

15. 18 :: Eloquent Route Model Binding & RESTful Controller

16. 19 :: Handling a Contact Form Using a Laravel Mailable
    1. Created a Contact Form
    2. Added web routes
    3. Created a ContactFormController
    4. Created Mailable class using php artisan make:mail ContactFormMail --markdown=emails.contact.contact-form
    5. Modify mail View 

17. 20 :: Flashing Data to Session & Conditional Alerts in View
    1. Added new code to layout.blade.php to display success message
    2. Set message in session and show/hide it conditionally

18. 21 :: Artisan Authentication - Register, Login & Password Reset
    1. Install auth
        1. php artisan ui vue --auth
        2. npm install && npm run dev
    2. Refactor all views to adopt new layouts.app changes
