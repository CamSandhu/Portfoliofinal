/*
Theme Name: My Portfolio
Theme URI: http://wordpress.org/themes/myportfolio
Author: karam
Author URI: http://wordpress.org/
Description: The 2013 theme for WordPress takes us back to the blog, featuring a full range of post formats, each displayed beautifully in their own unique way. Design details abound, starting with a vibrant color scheme and matching header images, beautiful typography and icons, and a flexible layout that looks great on any device, big or small.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: myportfolio
*/
<?php
header("Content-type: text/css");

?>
body {
  margin: 0;
  font-family: Open Sans, sans-serif;
  color: #ffffff;
  box-sizing: border-box;
}
.container:first-of-type {
  background: url('resources/topimg.png') no-repeat fixed center;
  height: 630px;
  background-size: cover;
  overflow-x: none;
 
}

/*--------------------icon------------------*/

i {
  /*    text-align: center;
        vertical-align: center;*/
}

/*---------------top part------------------*/
nav ul:last-of-type {
  display: none;
  font-size: 30px;
}
nav ul:last-of-type li {
  padding-right: 10px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 25px;
}
li {
  display: inline;
  padding: 0 30px 30px 30px;
}
ul:last-child {
  padding-right: 0;
}
a {
  text-decoration: none;
  color: white;
  font-size: 13px;
  font-weight: 800;
  line-height: 13px;
}
#logo {
  width: 214px;
  margin-top: 30px;
}
#logo img {
  float: left;
}

#logo:last-child span:last-of-type {
  display: block;
  font-size: 10px;
}
#logo:last-child span:first-of-type {
  font-size: 15px;
  font-weight: 800;
  line-height: 15px;
}
#logo:last-child {
  display: inline;
}

/*-------------------active class-----------------*/

nav ul:first-of-type li:first-of-type {
  border-bottom: 3px solid #c62828;
}

nav {
  float: right;
}
.clearfix {
  padding: 0 200px;
}
#logo {
  float: left;
  padding: 0 20px;
}
#heading {
  margin: auto;
  padding: 200px 20px 0 20px;
}
#heading h2 {
  margin: 0;
  font-size: 55px;
  font-weight: 700;
  padding-bottom: 30px;
  line-height: 55px;
  font-style: normal;
}

#heading p:first-of-type {
  font-size: 17px;
  line-height: 25px;
  font-weight: 400;
  font-style: normal;
  margin-bottom: 70px;
}
#heading:last-child p a {
  font-size: 16px;
  font-weight: 400;
  line-height: 16px;
  padding: 15px 20px;
  background-color: rgba(225, 225, 225, 0.2);
  border-radius: 3px;
  margin-right: 15px;
}
/*----------------------main-------------------------*/

main img {
  max-height: 250px;
  max-width: 100%;
}
main section {
  text-align: center;
}
main a {
  background-color: #c62828;
  font-size: 12px;
  line-height: 32px;
  font-weight: 400;
  padding: 5px;
  border-radius: 5px;
}

#description span:first-of-type {
  color: black;
  font-size: 38px;
  line-height: 38px;
  font-weight: bold;
  max-width:150px;
}
#description span:last-of-type {
  color: grey;
  display: block;
  font-size: 14px;
  line-height: 26px;
  max-width:200px;
  margin: 30px  auto;
  
}
#description {
  text-align: center;
}
.container2 {
  display: flex;
  margin: 130px  auto ;
  flex-direction: row;
  justify-content: center;
}

hr{
  border-color:#d6d6d6;
  border: 0;
  border-top: 1px solid rgba(0,0,0,.1);
}


/*-- ----------------form--------------------------- --*/
#send{
  width:60px;
  color:white;
  background-color: #c62828;
  border-radius:5px;
  border:none;
  padding:10px;
}
#contact-form h3{
  font-size:35px;
  color:black;
}
 #first-row {
  display:flex;
  flex-direction: row;
}

#second-row{
  display:flex;
  flex-direction:column;
  align-content: left;
}


#contact-form{
  margin:auto ;
}
label{
  color:grey;
  font-size:13px;
  float:left;
}
input{
  padding:5px 5px;
}

form section{
  margin:auto;
  max-width:700px;
}


/*------------------------footer----------------------- */

#footer a{
  background-color:white;
  color:grey;
  font-size:14px;
  margin:0 20px;
  cursor:pointer;
 
}
#footer{
  margin-top:50px;
  margin-bottom:70px;
}

/*----------------------------media queries----------*/
@media (max-width: 680px) {
  .container2 {
    flex-direction: column;
  
  }
  #first-row{
    flex-direction:column;
   
  }
  textarea{
    width:410px;
  }
  input{
    width:400px;
  }
  #heading:last-child p a {
    font-size: 13px;
    line-height: 13px;
    padding: 10px;
    border-radius: 3px;
    margin-right: 15px;
  }
  nav ul:first-of-type {
    display: none;
  }
  nav ul:last-of-type {
    display: block;
    padding-right: 0;
  }
}
@media (max-width: 1200px) {
  /*---------------------top part-----------------    */
  .clearfix {
    padding: 0;
  }

  #heading h2 {
    font-size: 35px;
    text-align: center;
  }
  #heading {
    padding: 200px 40px 0 40px;
  }
  #heading p {
    text-align: center;
  }
 
}
