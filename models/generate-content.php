<?php
// Model Content Generator - Helper script to add new models easily
// Usage: Run this script to generate model content structure

function generateModelContent($modelId, $modelName, $age, $height, $weight, $cup, $description) {
    $content = [
        'metaTitle' => "{$modelId} {$modelName} | Super Party Girl China Model {$height} {$cup}",
        'metaDescription' => "Meet {$modelId} from China. Age {$age}, {$height}, {$weight}, {$cup}. {$description}",
        'name' => "{$modelId} {$modelName}",
        'intro' => "{$modelId} {$modelName} is a stunning Super Party Girl from China with {$description}. She brings elegance and charm to every event.",
        'highlights' => [
            "Age {$age}",
            "Height {$height}",
            "Weight {$weight}",
            "Bust {$cup}",
            "Long legs",
            "Soft voice",
            "Natural charm"
        ],
        'vibe' => "{$modelId} combines elegance with playful energy. She moves with grace and confidence, bringing a warm atmosphere to every setting.",
        'whyLove' => [
            "Stunning figure with perfect proportions",
            "Long, elegant legs that look amazing in any outfit",
            "Soft, engaging personality",
            "Professional and reliable",
            "Photographs beautifully in any setting"
        ],
        'bestFor' => [
            "VIP parties and events",
            "Brand photography",
            "Social media content",
            "Luxury dinners",
            "Fashion shoots"
        ],
        'styleNotes' => "{$modelId} looks amazing in elegant dresses and evening wear. She carries herself with sophistication and style.",
        'galleryTeaser' => "Expect stunning poses, elegant styling, and professional shots that showcase her beauty and personality.",
        'bookingInfo' => "Book {$modelId} for your next event and experience her charm and professionalism firsthand."
    ];
    
    return $content;
}

// Example usage:
if (isset($_GET['generate'])) {
    $modelId = $_GET['modelId'] ?? 'C03';
    $modelName = $_GET['modelName'] ?? 'New Model';
    $age = $_GET['age'] ?? '24';
    $height = $_GET['height'] ?? '165cm';
    $weight = $_GET['weight'] ?? '48kg';
    $cup = $_GET['cup'] ?? '34C';
    $description = $_GET['description'] ?? 'beautiful features and charming personality';
    
    $content = generateModelContent($modelId, $modelName, $age, $height, $weight, $cup, $description);
    
    echo "<h2>Generated Content for {$modelId}</h2>";
    echo "<pre>" . json_encode($content, JSON_PRETTY_PRINT) . "</pre>";
    
    echo "<h3>PHP Array Format:</h3>";
    echo "<pre>";
    echo "'{$modelId}' => [\n";
    foreach ($content as $key => $value) {
        if (is_array($value)) {
            echo "    '{$key}' => [\n";
            foreach ($value as $item) {
                echo "        '" . addslashes($item) . "',\n";
            }
            echo "    ],\n";
        } else {
            echo "    '{$key}' => '" . addslashes($value) . "',\n";
        }
    }
    echo "],\n";
    echo "</pre>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Model Content Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Model Content Generator</h1>
        <p>Use this form to generate content for new models:</p>
        
        <form method="GET">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Model ID</label>
                        <input type="text" class="form-control" name="modelId" value="C03" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Model Name</label>
                        <input type="text" class="form-control" name="modelName" value="New Model" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" value="24" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Height</label>
                        <input type="text" class="form-control" name="height" value="165cm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Weight</label>
                        <input type="text" class="form-control" name="weight" value="48kg" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cup Size</label>
                        <input type="text" class="form-control" name="cup" value="34C" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" required>beautiful features and charming personality</textarea>
            </div>
            <button type="submit" name="generate" value="1" class="btn btn-primary">Generate Content</button>
        </form>
        
        <div class="mt-5">
            <h3>Instructions:</h3>
            <ol>
                <li>Fill out the form above with model details</li>
                <li>Click "Generate Content" to create the content structure</li>
                <li>Copy the generated PHP array</li>
                <li>Add it to <code>/lang/en-my.php</code> in the <code>modelPages</code> array</li>
                <li>Add the model image to <code>/wp-content/uploads/models/cn/{MODEL_ID}.webp</code></li>
                <li>Add model data to <code>/assets/js/models.js</code></li>
                <li>Test the new model page at <code>/models/{MODEL_ID}/</code></li>
            </ol>
        </div>
    </div>
</body>
</html>
