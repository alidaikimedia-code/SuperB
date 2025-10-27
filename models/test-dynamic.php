<?php
// Test page to demonstrate dynamic model routing
$page_key = 'modelTest';
$lang = 'en-my';

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<div class="container mt-5">
    <h1>Dynamic Model Pages Test</h1>
    <p>This page demonstrates how the dynamic model system works.</p>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Available Model URLs:</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="/models/C01/" target="_blank">/models/C01/</a>
                    <small class="text-muted d-block">Direct model ID</small>
                </li>
                <li class="list-group-item">
                    <a href="/models/chinese-party-girl/C01/" target="_blank">/models/chinese-party-girl/C01/</a>
                    <small class="text-muted d-block">With category prefix</small>
                </li>
                <li class="list-group-item">
                    <a href="/models/C02/" target="_blank">/models/C02/</a>
                    <small class="text-muted d-block">Another model</small>
                </li>
                <li class="list-group-item">
                    <a href="/cn/models/chinese-party-girl/C01/" target="_blank">/cn/models/chinese-party-girl/C01/</a>
                    <small class="text-muted d-block">Chinese version</small>
                </li>
            </ul>
        </div>
        
        <div class="col-md-6">
            <h3>How to Add New Models:</h3>
            <div class="alert alert-info">
                <h5>Step 1: Add to Language File</h5>
                <p>Add model data to <code>/lang/en-my.php</code> in the <code>modelPages</code> array:</p>
                <pre><code>'C03' => [
    'metaTitle' => 'C03 Name | Super Party Girl...',
    'metaDescription' => 'Model description...',
    'name' => 'C03 Name',
    // ... rest of the data
]</code></pre>
            </div>
            
            <div class="alert alert-success">
                <h5>Step 2: Add Model Image</h5>
                <p>Add model image to <code>/wp-content/uploads/models/cn/C03.webp</code></p>
            </div>
            
            <div class="alert alert-warning">
                <h5>Step 3: Update JavaScript Data</h5>
                <p>Add model info to <code>/assets/js/models.js</code> in the china.data array</p>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <h3>URL Patterns Supported:</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>URL Pattern</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>/models/{MODEL_ID}/</code></td>
                        <td>Direct model access</td>
                        <td><code>/models/C01/</code></td>
                    </tr>
                    <tr>
                        <td><code>/models/chinese-party-girl/{MODEL_ID}/</code></td>
                        <td>With category prefix</td>
                        <td><code>/models/chinese-party-girl/C01/</code></td>
                    </tr>
                    <tr>
                        <td><code>/cn/models/chinese-party-girl/{MODEL_ID}/</code></td>
                        <td>Chinese language version</td>
                        <td><code>/cn/models/chinese-party-girl/C01/</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <h3>Features:</h3>
            <ul>
                <li>✅ Single page handles all models</li>
                <li>✅ Dynamic content based on URL slug</li>
                <li>✅ SEO-friendly URLs</li>
                <li>✅ Responsive design</li>
                <li>✅ Easy to add new models</li>
                <li>✅ Multi-language support</li>
                <li>✅ Automatic meta tags</li>
                <li>✅ Related models section</li>
            </ul>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
