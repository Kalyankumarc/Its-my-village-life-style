var myApp = angular.module("myApp", []);
// Register Service
myApp.service("RegisterService" , function(){
var uid = 1;
var users = [{
'id' : 0,
'name' : 'Kalyan',
'email' : 'kalyankumar@gmail.com',
'password': 'Kalyan123',
'phone' : '123-45-678-901'},{
'id' : 1,
'name' : 'Naveen',
'email' : 'Naveen@gmail.com',
'password': 'Naveen123',
'phone' : '123-45-678-901'},{
'id' : 2,
'name' : 'Sridevi',
'email' : 'Sridevi@gmail.com',
'password': 'Sridevi123',
'phone' : '123-45-678-901'}];	

	// Save User
	this.save = function(user)  
	{
		if(user.id == null)                       
		{
			user.id = uid++;
			users.push(user);
		}
		else
		{
			for(var i in users)
			{
				if(users[i].id == user.id)
				{
					users[i] = user;
				}
			}
		}
	};

	// Search User
	this.get = function(id)
	{
		for(var i in users )
		{
		if( users[i].id == id)
		{
		return users[i];
		}
		}
	};

	// Delete User
	this.delete = function(id)
	{
	for(var i in users)
	{
	if(users[i].id == id)
	{
	users.splice(i,1);
	}
	}
	};	

	// List Users
	this.list = function()
	{
	return users;
	};	
});

// Register Controller 
myApp.controller("RegisterController" , function($scope , RegisterService){
console.clear();
$scope.ifSearchUser = false;
$scope.ifRegistationUser = false;
$scope.ifLoginUser = true;
$scope.title ="User List";
$scope.loginTitle = "Login Page";
$scope.registationUsertitle ="Registration Page";
$scope.users = RegisterService.list();
$scope.saveUser = function()
{
	console.log($scope.newuser);
	if($scope.newuser == null || $scope.newuser == angular.undefined)
	return;
	RegisterService.save($scope.newuser);
	alert('New User Login Successfully');
	$scope.newuser = {};
};	
$scope.loginUserHome = function()
{
	if($scope.newuser == null || $scope.newuser == angular.undefined)
	return;  

	/*$scope.testUser = angular.copy(RegisterService.get($scope.newuser.name));
if($scope.newuser.password == $scope.testUser.password && $scope.newuser.name == $scope.testUser.name)*/
if($scope.newuser.password == 'Kalyan123' && $scope.newuser.name == 'Kalyan')
	{
		confirmationBox();		
	}
	else if($scope.newuser.password == 'Naveen123' && $scope.newuser.name == 'Naveen')
	{
		confirmationBox();
		
	}else if($scope.newuser.password == 'Sridevi123' && $scope.newuser.name == 'Sridevi')
	{
		confirmationBox();
		
	}else{
		alert('Please enter valid Username and Password');
	}
	$scope.newuser = {};
};

$scope.logOutUser = function()
{
	window.open('index.html');
}
function confirmationBox(){
	if(confirm("User Login Successful, please Press OK button")){
		window.open('home.html');
	}else{
		alert("'Cancel' button was pressed.");
	}
}
	
$scope.delete = function(id)
{
	RegisterService.delete(id);
	if($scope.newuser != angular.undefined && $scope.newuser.id == id)
	{
		$scope.newuser = {};
	}
};		
$scope.edit = function(id)
{
	$scope.newuser = angular.copy(RegisterService.get(id));
};		
$scope.searchUser = function(){
	if($scope.title == "User List"){
		$scope.ifSearchUser=true;
		$scope.ifLoginUser=false;
		$scope.ifRegistationUser=false;
	}
	else
	{
		$scope.ifSearchUser = false;
		$scope.title = "User List";
	}		  
};
$scope.registrationPage = function(){
	if($scope.registationUsertitle == "Registration Page"){
		$scope.ifRegistationUser=true;
		$scope.ifSearchUser=false;
		$scope.ifLoginUser=false;		
	}
	else
	{
		$scope.ifRegistationUser = false;
		$scope.registationUsertitle = "Registration Page";
	}		  
};
$scope.loginUser = function(){
	if($scope.loginTitle == "Login Page"){
		$scope.ifLoginUser=true;
		$scope.ifRegistationUser=false;
		$scope.ifSearchUser=false;
		ifSearchUser =true;
	}
	else
	{
		$scope.ifLoginUser = false;
		$scope.loginTitle = "Login Page";
	}		  
};
});
