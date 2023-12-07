<!-- resources/views/users/users.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .profile-image {
            max-width: 50px;
            max-height: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h1>List of Users</h1>

    @if ($users->isEmpty())
        <p>No users available.</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th>Profile Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>UUID</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        @if ($user->profile && $user->profile->profile_image)
                            <img src="{{ asset($user->profile->profile_image) }}" alt="Profile Image" class="profile-image">
                        @else
                            No image
                        @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->uuid }}</td>
                    <td>
                        @if ($user->profile)
                            {{ $user->profile->profile_address }}
                        @else
                            No profile available
                        @endif
                    </td>
                    <td>
                        @if ($user->profile)
                            {{ $user->profile->profile_telephone1 }}
                        @else
                            No profile available
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>

<!-- Bootstrap JS and Popper.js via CDN (required for Bootstrap JavaScript components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
