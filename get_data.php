<?php
// Establish a database connection
$mysqli = new mysqli('localhost', 'kual2865_admin', 'Desember26.', 'kual2865_userdb');

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Calculate pagination parameters
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$itemsPerPage = isset($_GET['itemsPerPage']) ? $_GET['itemsPerPage'] : 10;
$offset = ($page - 1) * $itemsPerPage;

// Query to retrieve data with pagination (sorted by id_suhu in descending order)
$query = "SELECT Temperature.id_suhu, Temperature.id_ruangan, Temperature.suhu, 
                 Humidity.kelembaban, CarbonDioxide.co2, Temperature.waktu 
          FROM Temperature
          JOIN Humidity ON Temperature.id_suhu = Humidity.id_kelembaban
          JOIN CarbonDioxide ON CarbonDioxide.id_co2 = Humidity.id_kelembaban
          WHERE Temperature.id_ruangan = 1 
            AND Humidity.id_ruangan = 1 
            AND CarbonDioxide.id_ruangan = 1 
          ORDER BY Temperature.id_suhu DESC
          LIMIT $offset, $itemsPerPage";

$result = $mysqli->query($query);

// Generate HTML for the table
$html = '<table id="tabel">';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td style="text-align: center; vertical-align: middle;">No.</td>';
$html .= '<td style="text-align: center; vertical-align: middle;">ID Ruangan</td>';
$html .= '<td style="text-align: center; vertical-align: middle;">Suhu</td>';
$html .= '<td style="text-align: center; vertical-align: middle;">Kelembaban</td>';
$html .= '<td style="text-align: center; vertical-align: middle;">CO2</td>';
$html .= '<td style="text-align: center; vertical-align: middle;">Waktu</td>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';

$counter = $offset + 1; // Start numbering from the correct position

while ($row = $result->fetch_assoc()) {
    $html .= '<tr style="text-align: center; vertical-align: middle;">';
    $html .= '<td style="text-align: center; vertical-align: middle;">' . $row['id_suhu'] . '</td>';
    $html .= '<td style="text-align: center; vertical-align: middle;">' . $row['id_ruangan'] . '</td>';
    $html .= '<td>' . $row['suhu'] . '</td>';
    $html .= '<td>' . $row['kelembaban'] . '</td>';
    $html .= '<td>' . $row['co2'] . '</td>';
    $html .= '<td>' . $row['waktu'] . '</td>';
    $html .= '</tr>';

    
}

$html .= '</tbody>';
$html .= '</table>';

// Output the table
echo $html;

// Calculate total number of rows for pagination
$totalQuery = "SELECT COUNT(*) as total FROM Temperature";
$totalResult = $mysqli->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalItems = $totalRow['total'];

// Calculate the total number of pages
$totalPages = ceil($totalItems / $itemsPerPage);

// Calculate previous and next page numbers
$prevPage = ($page > 1) ? $page - 1 : false;
$nextPage = ($page < $totalPages) ? $page + 1 : false;

// Generate pagination HTML
$paginationHtml = '<div class="pagination">';
if ($prevPage !== false) {
    $paginationHtml .= '<a href="?page=' . $prevPage . '&itemsPerPage=' . $itemsPerPage . '">Previous</a>';
}
for ($i = 1; $i <= $totalPages; $i++) {
    $activeClass = ($i == $page) ? 'active' : '';
    $paginationHtml .= '<a class="' . $activeClass . '" href="?page=' . $i . '&itemsPerPage=' . $itemsPerPage . '">' . $i . '</a>';
}
if ($nextPage !== false) {
    $paginationHtml .= '<a href="?page=' . $nextPage . '&itemsPerPage=' . $itemsPerPage . '">Next</a>';
}
$paginationHtml .= '</div>';

// Output the pagination links


// Close the database connection
$mysqli->close();
?>
