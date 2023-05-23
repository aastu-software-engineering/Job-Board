
<?
//Filter the jobs by field if a category button was clicked
if (isset($_GET['field'])) {

$field = $_GET['field'];

if ($field == 'All') {

$sql = "SELECT * FROM jobs";
} else {
$sql = "SELECT * FROM jobs WHERE field = '$field'";
}
} else {
$sql = "SELECT * FROM jobs";
}
// Retrieve the data from the database
// $result = $conn->query($sql);






////////////////////////////////////////////////////////////////

if (isset($_GET['query'])) {
$query = $_GET['query'];
$sql = "SELECT * FROM jobs WHERE job_title LIKE '%$query%' OR job_description LIKE '%$query%'";
}







$result = $conn->query($sql);









if ($result->num_rows > 0) {
echo '<table>';
    echo '<thead>
        <tr>
            <th>Job Title</th>
            <th>Field</th>
            <th>Company Name</th>
            <th>Job Description</th>
            <th>Requirements</th>
            <th>Action</th>
        </tr>
    </thead>';
    echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
        echo '<tr>';
            echo '<td>' . htmlspecialchars($row['job_title']) . '</td>';
            echo '<td>' . htmlspecialchars($row['field']) . '</td>';
            echo '<td>' . htmlspecialchars($row['company_name']) . '</td>';
            echo '<td>' . htmlspecialchars($row['job_description']) . '</td>';
            echo '<td>' . htmlspecialchars($row['requirements']) . '</td>';
            echo '<td><button class="button-30" role="button" type="submit" name="field" value="All">Apply</button></td>';
            echo '</tr>';
        }
        echo '</tbody>';
    echo '</table>';
} else {
echo '<div class="nojob">
    <div class="message">No jobs found.</div>
</div>';
}
// Close the database connection
$conn->close();