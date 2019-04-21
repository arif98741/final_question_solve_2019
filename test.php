Php is loosely-typed language because in php you can use a variable without declaring it. If a variable is used to store integer then you can still access that integer as string and reverse is possible too. Php manages that automatically.

Variable scope is known as its boundary within which it can be visible or accessed from code. 

Local variables (local scope)
Global variables (special global scope)

1. Local Scope Variables
A local scope is a restricted boundary of a variable within which code block it is declared.

<?php
function calculate_count() {
	$count = 5;
	//will print 5; the value of local variable
	echo $count++; 
	}
?>
<?php
$count = 0;
function calculate_count() {
	global $count;
	// will print 0 and increment global variable
	echo $count++ . "<br/>"; 
}
calculate_count();
echo $count;
?>
<script>
	var a = Number(prompt("Enter height"));
var b = Number(prompt("Enter width"));
alert("Area is "+ a * b);
</script>


?>
Inheritance is a well-established programming principle, and PHP makes use of this principle in its object model. This principle will affect the way many classes and objects relate to one another

MVC stands for Model–view–controller. It is a software architectural pattern for implementing user interfaces on computers. It divides a given software application into three interconnected parts, so as to separate internal representations of information from the ways that information is presented to or accepted from the user.

Components of MVC

1) Model: It specifies the logical structure of data in a software application and the high-level class associated with it. It is the domain-specific representation of the data which describes the working of an application. When a model changes its state, domain notifies its associated views, so they can refresh.

2) View: View component is used for all the UI logic of the application and these are the components that display the application’s user interface (UI). It renders the model into a form suitable for interaction. Multiple views can exist for a single model for different purposes.

3) Controller: Controllers act as an interface between Model and View components. It processes all the business logic and incoming requests, manipulate data using the Model component, and interact with the Views to render the final output. It receives input and initiates a response by making calls on model objects.

1) Faster development process: MVC supports rapid and parallel development. With MVC, one programmer can work on the view while other can work on the controller to create business logic of the web application. The application developed using MVC can be three times faster than application developed using other development patterns.

2) Ability to provide multiple views: In the MVC Model, you can create multiple views for a model. Code duplication is very limited in MVC because it separates data and business logic from the display.

3) Support for asynchronous technique: MVC also supports asynchronous technique, which helps developers to develop an application that loads very fast.

4) Modification does not affect the entire model: Modification does not affect the entire model because model part does not depend on the views part. Therefore, any changes in the Model will not affect the entire architecture.

5) MVC model returns the data without formatting: MVC pattern returns data without applying any formatting so the same components can be used and called for use with any interface.

6) SEO friendly Development platform: Using this platform, it is very easy to develop SEO-friendly URLs to generate more visits from a specific application.

Resources are special variables used in both functional and object oriented programming to read/write files, modify MySQL/Oracle other databases and image manipulations as examples but this is not exhaustive.
Objects are an instance of a class that has both data and methods.

Local variables: The variables declared within a function are called local variables to that function and has its scope only in that particular function.

Global variables: The variables declared outside a function are called global variables. These variables can be accessed directly outside a function. To get access within a function we need to use the “global” keyword before the variable to refer to the global variable.


The main difference between a session and a cookie is that session data is stored on the server, whereas cookies store data in the visitor’s browser.

Sessions are more secure than cookies as it is stored in server. Cookie can be turned off from browser.

Data stored in cookie can be stored for months or years, depending on the life span of the cookie. But the data in the session is lost when the web browser is closed.

An abstract class is a class that contains at least one abstract method, which is a method without any actual code in it, just the name and the parameters, and that has been marked as "abstract".

Well, there are two types of Polymorphism as stated below:

Static Polymorphism (Early binding)
Dynamic Polymorphism (Late binding)
Static Polymorphism(Early Binding):

Static Polymorphism is also know as Early Binding and Compile time Polymorphism. Method Overloading and Operator Overloading are examples of the same.

It is known as Early Binding because the compiler is aware of the functions with same name and also which overloaded function is tobe called is known at compile time.