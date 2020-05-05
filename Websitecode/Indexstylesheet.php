<?php

header("Content-type: text/css; charset: UTF-8");
h1  {
    text-align: center;

    color: #feda6a;
    font-family: Arial;
    padding:10px;
    margin: auto;


}
header{

    background-color: #393f4d;
    padding: 5px;
    margin: auto;
    opacity: 0.5;
    text-align: center;


}
nav { background-color:#1d1e22;
    font-weight: bold;
    text-align: center;
    overflow: hidden;
    padding: 8px;
    margin: auto;


}

nav ul { list-style-type: none;
    margin: 0;

}
nav li { padding: 0.5em;
    display: inline-block;
}
nav a { text-decoration: none;
    display: block;

}
nav ul ul{
    position:absolute;
    background-color: #8e8e90;
    padding:0;
    text-align:left;
    display:none;
}
nav li:hover ul{
    display:block;

}
nav ul ul li{
    display:block;
    border-bottom:1px solid cadetblue;
}
nav a:link { color: #99A5A2 }
nav a:visited { color: #646A68 }
nav a:hover {  color: #C4947E }
nav a:active{color: #99A5A2}
main {
    color: #8e8e90;
    padding: 10px 20px;
    overflow: auto;
    min-height: 400px;
}
video, embed { float: right; padding-left: 20px; }
body    {
<!--background-image: url("Images/background.jpg"); -->
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #BEC7CC;
    margin: auto;
    font-family: Arial;
    color: #8e8e90;
}
form {
    background-color: #1d1e22;
    color: #BEC7CC;
    font-family: Arial;
    text-align: center;
    margin: auto;
    padding: 20px 20px 20px;
    display: flex;
    flex-flow: column nowrap;
}
input, textarea { margin-bottom: .5em;
    padding: 2%;
}
img {
    max-width: 10%;
    max-height: 15%;
}

h2  {
    font-family: "Franklin Gothic Heavy";
    font-weight: bold;
    text-align: center;
    margin: auto;
    font-size: large;

}
h3  {
    color: #99A5A2;
    float: inside;
    text-align: center;
    font-size: large;
}
li  {
    list-style-type: circle;
}

/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}


.row::after {
    content: "";
    clear: both;
    display: table;
}

img {
    display: block;
    margin: auto;

}
.container {
    position: relative;
    width: 50%;

}

.image {
    display: block;
    width: 100%;
    height: auto;
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: #8e8e90;
}

.container:hover .overlay {
    opacity: 1;
}
.wrapper {
    text-align: center;

}
.text {
    color: #1d1e22;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
}
.area {
    display: inline;
    column-count: 2;
    text-align: center;

}
@media (max-width: 600px) {
    nav ul { display: flex;
        flex-flow: row nowrap;
        justify-content: flex-end; }
    nav li { width: 7em; }
    iframe{
        display: none;
    }

}
@media (max-width: 1024px) {
    nav ul {
        display: flex;
        flex-flow: row nowrap;
        justify-content: flex-end;
    }

    nav li {
        width: 7em;
    }

    iframe {
        display: none;
    }
}
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
    float: left;
    width: 33.33%;
    padding: 5%;
}

/* Clear floats after image containers */
.row::after {
    content: "";
    clear: both;
    display: table;
}
table.cinereousTable {
    border: 6px solid #444444;
    background-color: #F0F0F0;
    width: 100%;
    text-align: center;
}
table.cinereousTable td, table.cinereousTable th {
    border: 1px solid #F0F0F0;
    padding: 4px 4px;
}
table.cinereousTable tbody td {
    font-size: 13px;
}
table.cinereousTable tr:nth-child(even) {
    background: #F0E6DA;
}
table.cinereousTable thead {
    background: #C4947E;
    background: -moz-linear-gradient(top, #d3af9e 0%, #ca9e8b 66%, #C4947E 100%);
    background: -webkit-linear-gradient(top, #d3af9e 0%, #ca9e8b 66%, #C4947E 100%);
    background: linear-gradient(to bottom, #d3af9e 0%, #ca9e8b 66%, #C4947E 100%);
}
table.cinereousTable thead th {
    font-size: 17px;
    font-weight: bold;
    color: #F0F0F0;
    text-align: left;
    border-left: 2px solid #C4947E;
}
table.cinereousTable thead th:first-child {
    border-left: none;
}

table.cinereousTable tfoot {
    font-size: 16px;
    font-weight: bold;
    color: #F0F0F0;
    background: #C4947E;
    background: -moz-linear-gradient(top, #d3af9e 0%, #ca9e8b 66%, #C4947E 100%);
    background: -webkit-linear-gradient(top, #d3af9e 0%, #ca9e8b 66%, #C4947E 100%);
    background: linear-gradient(to bottom, #d3af9e 0%, #ca9e8b 66%, #C4947E 100%);
}
table.cinereousTable tfoot td {
    font-size: 16px;
}
table.cinereousTable tfoot .links {
    text-align: right;
}
table.cinereousTable tfoot .links a{
    display: inline-block;
    background: #FFFFFF;
    color: #C4947E;
    padding: 2px 8px;
    border-radius: 5px;
}
?>