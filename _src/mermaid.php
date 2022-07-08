<?php include('inc/cabecera_html.php'); ?>
<?php include('inc/lib.php'); ?>
	<title>Mermaid</title>
	<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
	</head>
<body>

<?php include('inc/cabecera_fixed.php'); ?>


<main>
<header><h1>Mermaid</h1></header>



<section>
<h1><a name="cabecera">Mermaid</a></h1>
<p>Hola mundo</p>
<div class="mermaid">
        graph TD 
        A --> B 
        B --> C
        B --> D
    </div>
</section>





</main>
<?php include('inc/footer.php'); ?>
