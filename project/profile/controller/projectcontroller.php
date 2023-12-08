<?php

$errors = array();
$done = array();
if (isset($_POST['postproject'])) {


    $category =  mysqli_real_escape_string($con, $_POST['category']);
    $sub_category =  mysqli_real_escape_string($con, $_POST['sub_category']);
    $title =  mysqli_real_escape_string($con, $_POST['title']);
    $description =  mysqli_real_escape_string($con, $_POST['description']);
    $detail =  $_POST['detail'];
    $budget_type =  mysqli_real_escape_string($con, $_POST['budget_type']);
    $budget =  mysqli_real_escape_string($con, $_POST['budget']);
    $currency =  mysqli_real_escape_string($con, $_POST['currency']);
    $deadline =  mysqli_real_escape_string($con, $_POST['deadline']);
    $tags =  $_POST['tags'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = "../uploaded/" . $image;


    if (empty($category) || empty($tags) || empty($sub_category) || empty($title) || empty($description) || empty($detail) || empty($budget_type) || empty($budget) || empty($currency) || empty($image)) {
        $errors['data'] = "add all your information";
    }
    if (count($errors) === 0) {
        $sql = "INSERT INTO projects ( title, project_description, detail, budget, budget_type, currency, id_categorie, id_sub_category, ID_user, deadline ,image) 
    VALUES ( '$title', '$description', '$detail', $budget, '$budget_type', '$currency', '$category', '$sub_category', '$id', '$deadline' ,'$image');";
        $result = mysqli_query($con, $sql);
        if ($result) {
            move_uploaded_file($image_tmp_name, $image_folder);
            $sql = "SELECT id FROM projects WHERE title = '$title' and project_description = '$description'";
            $result = mysqli_query($con, $sql);
            $projectid = mysqli_fetch_assoc($result)['id'];
            foreach ($tags as $tag) {
                $sql = "SELECT id FROM tags WHERE tagName = '$tag' ";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) == 0) {
                    $sql = "INSERT INTO tags (tagName) values ('$tag')";
                    $result3 = mysqli_query($con, $sql);
                    if ($result3) {
                        $sql = "SELECT id FROM tags WHERE tagName = '$tag' ";
                        $result = mysqli_query($con, $sql);
                        $tagid = mysqli_fetch_assoc($result)['id'];
                    } else {
                        $errors['tag'] = "error in adding tag";
                        break;
                    }
                } else {
                    $tagid = mysqli_fetch_assoc($result)['id'];
                }

                // Perform any necessary validation and sanitization here
                $tag = mysqli_real_escape_string($con, $tag);

                // Insert into the database (replace 'your_table_name' and 'column_name' with actual values)
                $sql = "INSERT INTO project_tags (tag_id,project_id) VALUES ($tagid,$projectid)";

                if ($con->query($sql) !== TRUE) {
                    echo "Error inserting record: " . $con->error;
                }
            }
        }
    }
}
