
<div class="container">

    <div class="card">
    <div class="card-header">
        Students List
    </div>
    <div class="card-body">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
            <tr>
                <th scope="row"><?php echo $student['id']; ?></th>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['surname']; ?></td>
                <td><?php echo $student['phone_number']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    </div>

</div>


