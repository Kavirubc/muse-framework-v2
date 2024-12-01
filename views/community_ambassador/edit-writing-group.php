<?php
// Mock data for demonstration purposes
$groups = [
    1 => ["name" => "Inkspire Circle", "description" => "A group symbolizing inspiration and creativity through writing.", "type" => "Writing Group"],
    2 => ["name" => "Quill Collective", "description" => "A community of passionate writers.", "type" => "Writing Group"],
    3 => ["name" => "Plot Weavers", "description" => "Crafting intricate plots and narratives.", "type" => "Writing Group"]
];

// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Fetch the group details
$group = $id && isset($groups[$id]) ? $groups[$id] : null;

// If no valid group is found, redirect back to the main page
if (!$group) {
    header("Location: writing-groups.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Community</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 500;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .save-btn {
            background-color: #28a745;
            color: #fff;
        }
        .cancel-btn {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Community</h1>
    <form action="save_community.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        <label for="groupName">Group Name:</label>
        <input type="text" id="groupName" name="groupName" value="<?php echo htmlspecialchars($group['name']); ?>" required>

        <label for="groupDescription">Description:</label>
        <textarea id="groupDescription" name="groupDescription" rows="4" required><?php echo htmlspecialchars($group['description']); ?></textarea>

        <label for="communityType">Community Type:</label>
        <select id="communityType" name="communityType" required>
            <option value="Writing Group" <?php echo $group['type'] === "Writing Group" ? "selected" : ""; ?>>Writing Group</option>
        </select>

        <div class="button-group">
            <button type="submit" class="btn save-btn">Save Changes</button>
            <a href="writing-groups.php" class="btn cancel-btn">Cancel</a>
        </div>
    </form>
</div>

</body>
</html>
