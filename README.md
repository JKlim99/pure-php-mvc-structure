# Pure PHP MVC structure
- Author: Lim Jinq Kuen
- This is a base code structure of using pure PHP with Model View Controller (MVC) architecture
- The use of router is implemented as well
- It helps in making ease of PHP website development

# File Structure
Model
- A class that link to specific table in database
- Executing db statement or querying can be done by using this class's functions

Views
- A HTML webpage
- Able to display the data passed from the PHP code

Controller
- A class where it handles the logical part of the system
- Helps in routing request to specified view

config
- Place to store essential informations of the system such as DB connection

routes
- A class that route specified uri to specified controller's function

index.php
- All the requests will go through this file
- All the important files are included in this file
- The request's uri and method will be verified in this file and route to specific controller's function

assets
- A file storage for storing images, favicon, fonts and so on
