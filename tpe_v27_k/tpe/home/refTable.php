<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข้อมูลผู้ใช้งาน</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>จัดการข้อมูลผู้ใช้งาน</h2>
    <div class="d-flex mb-3">
        <button class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addUserModal">เพิ่มผู้ใช้งาน</button>
        <button onclick="window.location.href='index.html'" class="btn btn-secondary">กลับไปหน้าหลัก</button>
    </div>
    <!-- ตารางแสดงข้อมูลผู้ใช้งาน -->
    <table class="table table-striped" id="userTable">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อ</th>
                <th>อีเมล</th>
                <th>เบอร์โทรศัพท์</th>
                <th>การกระทำ</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>1</td>
                <td>ทดสอบ</td>
                <td>test@pwa.co.th</td>
                <td>08123456789</td>
                <td>
                <button class="btn btn-warning btn-sm me-2">แก้ไข</button>
                <button class="btn btn-danger btn-sm">ลบ</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- ฟอร์มเพิ่มผู้ใช้งาน -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">เพิ่มผู้ใช้งาน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="phone" required>
                    </div>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let users = []; // ตัวแปรเก็บข้อมูลผู้ใช้งาน

        // ฟังก์ชันเพิ่มผู้ใช้งาน
        $('#addUserForm').submit(function(e) {
            e.preventDefault();
            const newUser = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val()
            };
            users.push(newUser);
            renderUserTable();
            $('#addUserModal').modal('hide');
            $('#addUserForm')[0].reset();
        });

        // ฟังก์ชันแสดงข้อมูลในตาราง
        function renderUserTable() {
            $('#userTable tbody').empty();
            users.forEach((user, index) => {
                $('#userTable tbody').append(`
                    <tr>
                        <td>${index + 1}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.phone}</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-index="${index}">แก้ไข</button>
                            <button class="btn btn-danger btn-sm delete-btn" data-index="${index}">ลบ</button>
                        </td>
                    </tr>
                `);
            });
        }

        // ฟังก์ชันแก้ไขข้อมูล
        $(document).on('click', '.edit-btn', function() {
            const index = $(this).data('index');
            const user = users[index];
            $('#name').val(user.name);
            $('#email').val(user.email);
            $('#phone').val(user.phone);
            // แสดงฟอร์มแก้ไข (คุณสามารถสร้างฟอร์มนี้ได้ในรูปแบบ modal หรือแยกออกเป็นฟอร์มอื่น)
        });

        // ฟังก์ชันลบข้อมูล
        $(document).on('click', '.delete-btn', function() {
            const index = $(this).data('index');
            if (confirm('คุณต้องการลบผู้ใช้งานนี้?')) {
                users.splice(index, 1);
                renderUserTable();
            }
        });
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
