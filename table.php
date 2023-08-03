<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nome do Produto</th>
            <th>Setor</th>
            <th>Quantidade</th>
            <th>Trabalho</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = array(
            array("Lápis", "Papelaria", "System Architect", "Edinburgh", "61", "2011-04-25", "$320,800"),
            array("Caneta", "Papelaria", "Accountant", "Tokyo", "63", "2011-07-25", "$170,750"),
            array("Caderno", "Papelaria", "Junior Technical Author", "San Francisco", "66", "2009-01-12", "$86,000"),
            array("Borracha", "Papelaria", "Senior Javascript Developer", "Edinburgh", "22", "2012-03-29", "$433,060"),
            array("Marcador", "Papelaria", "Accountant", "Tokyo", "33", "2008-11-28", "$162,700"),
            array("Corretivo", "Papelaria", "Integration Specialist", "New York", "61", "2012-12-02", "$372,000"),
            array("Post-it", "Papelaria", "Sales Assistant", "San Francisco", "59", "2012-08-06", "$137,500"),
            array("Grampeador", "Papelaria", "Integration Specialist", "Tokyo", "55", "2010-10-14", "$327,900"),
            array("Clips", "Papelaria", "Javascript Developer", "San Francisco", "39", "2009-09-15", "$205,500"),
            array("Agenda", "Papelaria", "Software Engineer", "Edinburgh", "23", "2008-12-13", "$103,600"),
            array("Tesoura", "Papelaria", "Office Manager", "London", "30", "2008-12-19", "$90,560"),
            array("Apontador", "Papelaria", "Support Lead", "Edinburgh", "22", "2013-03-03", "$342,000"),
            array("Fita adesiva", "Papelaria", "Regional Director", "San Francisco", "36", "2008-10-16", "$470,600"),
            array("Estojo", "Papelaria", "Senior Marketing Designer", "London", "43", "2012-12-18", "$313,500"),
            array("Pasta", "Papelaria", "Regional Director", "London", "19", "2010-03-17", "$385,750"),
            array("Lapiseira", "Papelaria", "Marketing Designer", "London", "66", "2012-11-27", "$198,500"),
            array("Régua", "Papelaria", "Chief Financial Officer (CFO)", "New York", "64", "2010-06-09", "$725,000"),
            array("Giz de cera", "Papelaria", "Systems Administrator", "New York", "59", "2009-04-10", "$237,500"),
            array("Lancheira", "Papelaria", "Software Engineer", "London", "41", "2012-10-13", "$132,000"),
            array("Canetinha", "Papelaria", "Personnel Lead", "Edinburgh", "35", "2012-09-26", "$217,500"),
            array("Pincel", "Papelaria", "Development Lead", "New York", "30", "2011-09-03", "$345,000"),
            array("Papel sulfite", "Papelaria", "Chief Marketing Officer (CMO)", "New York", "40", "2009-06-25", "$675,000"),
            array("Grafite", "Papelaria", "Pre-Sales Support", "New York", "21", "2011-12-12", "$106,450"),
            array("Doris Wilder", "Sales Assistant", "Sydney", "23", "2010-09-20", "$85,600"),
            array("Angelica Ramos", "Chief Executive Officer (CEO)", "London", "47", "2009-10-09", "$1,200,000"),
            array("Gavin Joyce", "Developer", "Edinburgh", "42", "2010-12-22", "$92,575"),
            array("Jennifer Chang", "Regional Director", "Singapore", "28", "2010-11-14", "$357,650"),
            array("Brenden Wagner", "Software Engineer", "San Francisco", "28", "2011-06-07", "$206,850"),
            array("Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "48", "2010-03-11", "$850,000"),
            array("Shou Itou", "Regional Marketing", "Tokyo", "20", "2011-08-14", "$163,000"),
            array("Michelle House", "Integration Specialist", "Sydney", "37", "2011-06-02", "$95,400"),
            array("Suki Burks", "Developer", "London", "53", "2009-10-22", "$114,500"),
            array("Prescott Bartlett", "Technical Author", "London", "27", "2011-05-07", "$145,000"),
            array("Gavin Cortez", "Team Leader", "San Francisco", "22", "2008-10-26", "$235,500"),
            array("Martena Mccray", "Post-Sales support", "Edinburgh", "46", "2011-03-09", "$324,050"),
            array("Unity Butler", "Marketing Designer", "San Francisco", "47", "2009-12-09", "$85,675"),
            array("Howard Hatfield", "Office Manager", "San Francisco", "51", "2008-12-16", "$164,500"),
            array("Hope Fuentes", "Secretary", "San Francisco", "41", "2010-02-12", "$109,850"),
            array("Vivian Harrell", "Financial Controller", "San Francisco", "62", "2009-02-14", "$452,500"),
            array("Timothy Mooney", "Office Manager", "London", "37", "2008-12-11", "$136,200"),
            array("Jackson Bradshaw", "Director", "New York", "65", "2008-09-26", "$645,750"),
            array("Olivia Liang", "Support Engineer", "Singapore", "64", "2011-02-03", "$234,500"),
            array("Bruno Nash", "Software Engineer", "London", "38", "2011-05-03", "$163,500"),
            array("Sakura Yamamoto", "Support Engineer", "Tokyo", "37", "2009-08-19", "$139,575"),
            array("Thor Walton", "Developer", "New York", "61", "2013-08-11", "$98,540"),
            array("Finn Camacho", "Support Engineer", "San Francisco", "47", "2009-07-07", "$87,500"),
            array("Serge Baldwin", "Data Coordinator", "Singapore", "64", "2012-04-09", "$138,575"),
            array("Zenaida Frank", "Software Engineer", "New York", "63", "2010-01-04", "$125,250"),
            array("Zorita Serrano", "Software Engineer", "San Francisco", "56", "2012-06-01", "$115,000"),
            array("Jennifer Acosta", "Junior Javascript Developer", "Edinburgh", "43", "2013-02-01", "$75,650"),
            array("Cara Stevens", "Sales Assistant", "New York", "46", "2011-12-06", "$145,600"),
            array("Hermione Butler", "Regional Director", "London", "47", "2011-03-21", "$356,250"),
            array("Lael Greer", "Systems Administrator", "London", "21", "2009-02-27", "$103,500"),
            array("Jonas Alexander", "Developer", "San Francisco", "30", "2010-07-14", "$86,500"),
            array("Shad Decker", "Regional Director", "Edinburgh", "51", "2008-11-13", "$183,000"),
            array("Michael Bruce", "Javascript Developer", "Singapore", "29", "2011-06-27", "$183,000"),
            array("Donna Snider", "Customer Support", "New York", "27", "2011-01-25", "$112,000")
        );

        foreach ($data as $item) {
            echo "<tr>";
            echo "<td>{$item[0]}</td>";
            echo "<td>{$item[1]}</td>";
            echo "<td>{$item[2]}</td>";
            echo "<td>{$item[3]}</td>";
            echo "<td>{$item[4]}</td>";
            echo "<td>{$item[5]}</td>";
            if (isset($item[6])) {
              echo "<td>{$item[6]}</td>";
          } else {
              echo "<td></td>"; // Ou uma mensagem de erro ou valor padrão, caso o índice 6 não exista.
          }
          
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>
</html>
