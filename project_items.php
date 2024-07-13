<?php
$project_items = [
    [
        'title' => 'Proyek akhir Portofolio',
        'description' => 'Penelitian tentang protofolio yang dilakukan selama semester 2.'
    ],
    [
        'title' => 'Web Portofolio',
        'description' => 'Pengembangan aplikasi web untuk memperkenalkan diri menggunakan portofoio.'
    ],
    [
        'title' => 'Presentasi portofolio',
        'description' => 'Presentasi tentang portofolio saya pada tugas dan project akhir mata kuiah.'
    ],
    
];

foreach ($project_items as $item) {
    echo "<div class='project-item'>";
    echo "<h3>{$item['title']}</h3>";
    echo "<p>{$item['description']}</p>";
    echo "</div>";
}
?>