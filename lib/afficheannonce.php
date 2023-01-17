<?php
function afficheAnnonce($page, $itemsPerPage){
    global $conn;
    $offset = ($page - 1) * $itemsPerPage;
                $query = "SELECT * FROM annonce
                          LIMIT :itemsPerPage OFFSET :offset";
                $stmt = $conn->prepare($query);
                $stmt->bindValue(':itemsPerPage', $itemsPerPage, PDO::PARAM_INT);
                $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetchAll();
                echo '<div class="container">';
                echo '<div class="row">';
                foreach ($result as $row) {
                    $query = "SELECT * FROM photo_prop
                            WHERE id_annonce = :id";
                    $stmt = $conn->prepare($query);
                    $stmt->bindValue(':id', $row['id']);
                    $stmt->execute();
                    $img = $stmt->fetch();
                    echo '<div class="col-sm-6 col-md-3 col-lg-4 my-2">';
                    echo '<div class="card h-100 w-75">';
                    echo '<img class="card-img-top h-75 w-100" src="' . $img['photo'] . '" alt="property image">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row['titre'] . '</h5>';
                    echo '<p class="card-text">' . $row['description'] . '</p>';
                    echo '<p class="card-text">' . $row['prix'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
                echo '</div>';
                $query = "SELECT COUNT(id) FROM annonce";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $totalItems = $stmt->fetchColumn();
                $totalPages = ceil($totalItems / $itemsPerPage);
                echo '<nav aria-label="Page navigation example">';
                echo '<ul class="pagination">';
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<li class="page-item">';
                    echo '<a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</nav>';
}
?>