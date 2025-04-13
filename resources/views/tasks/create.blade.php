<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add New Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" ></textarea>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">phone_number</label>
                <textarea name="phone_number" id="phone_number" class="form-control" ></textarea>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <textarea name="email" id="email" class="form-control" ></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
