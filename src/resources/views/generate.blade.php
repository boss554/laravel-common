<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Form Section -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Module Structure Generator</div>
                    <div class="card-body">
                        <form action="{{route('structure_generate')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="module_name">Module Name:</label>
                                <input type="text" class="form-control" id="module_name" name="module_name" required>
                            </div>
                            <div class="form-group">
                                <label>Choose Components to Generate:</label><br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="modules[]" value="model" checked>
                                    <label class="form-check-label">Model/Migration</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="modules[]" value="controller" checked>
                                    <label class="form-check-label">Controller</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="modules[]" value="seeder">
                                    <label class="form-check-label">Seeder</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="modules[]" value="factory">
                                    <label class="form-check-label">Factory</label>
                                </div>
                                <div class="form-group">
                                    <label for="folder_name">Controller Folder Name:</label>
                                    <input type="text" class="form-control" placeholder="Admin" id="folder_name" name="folder_name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <!-- Migration Output Section -->
            <div class="card mb-3">
                <div class="card-header">Migration Output</div>
                <div class="card-body" id="migration_output"></div>
            </div>

            <!-- Controller Output Section -->
            <div class="card mb-3">
                <div class="card-header">Controller Output</div>
                <div class="card-body" id="controller_output"></div>
            </div>

            <!-- Factory Output Section -->
            <div class="card mb-3">
                <div class="card-header">Factory Output</div>
                <div class="card-body" id="factory_output"></div>
            </div>

            <!-- Seeder Output Section -->
            <div class="card mb-3">
                <div class="card-header">Seeder Output</div>
                <div class="card-body" id="seeder_output"></div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('form').submit(function (event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route('structure_generate') }}',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    // Display the output to the user
                    $('#migration_output').text(response.migration_output);
                    $('#controller_output').text(response.controller_output);
                    $('#factory_output').text(response.factory_output);
                    $('#seeder_output').text(response.seeder_output);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
