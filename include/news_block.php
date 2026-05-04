<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/connect__bd/connect__bd.php";

$page_patch = $_SERVER['REQUEST_URI'];
$limit = null;
if ($page_patch == "/news") {
    $limit = '';
} else {
    $limit = 'LIMIT 3';
}
$stmt = mysqli_prepare($connect, "SELECT * FROM `news` ORDER BY `news_id` DESC $limit");
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    $date__part = explode('-', $row['news_pubulikate_date']);
    $year = $date__part[0];
    $month = $date__part[1];
    $day = $date__part[2];
    ?>
    <div class="news-block" id="_<?php echo htmlspecialchars($row['news_id']) ?>">
        <img src="<?php echo htmlspecialchars($row['news_image'], ENT_QUOTES) ?>" class="news-img" alt="news-image">
        <span class="news-time_pub"><?php echo htmlspecialchars($day . '.' . $month . '.' . $year) ?></span>
        <h3 class="news-heading">
            <?php echo htmlspecialchars($row['news_heading']) ?>
        </h3>
        <p class="news-text">
            <?php echo htmlspecialchars($row['news_text']) ?>
        </p>
    </div>
    <?php

}

mysqli_stmt_close($stmt);
?>