<?php

// Façon de contourner la faille XSS
$prenom = htmlspecialchars($_GET['prenom']);
echo $prenom;

// http://localhost:8000/index.php?prenom=Pauline
// http://localhost:8000/index.php?prenom=<script>alert("hacking ok !")</script>