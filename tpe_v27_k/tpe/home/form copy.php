<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Job Form - TPE</title>
  <style>
    body { font-family: Arial, sans-serif; }
    fieldset { margin-bottom: 20px; padding: 10px; }
    table { width: 100%; border-collapse: collapse; }
    td { padding: 5px; vertical-align: top; }
    label { font-weight: bold; }
    input[type="text"], input[type="date"], input[type="number"] {
      width: 100%;
      padding: 5px;
    }
  </style>
</head>
<body>

<h1>Top Precision Engineering Co.,Ltd.</h1>

<form>

  <!-- ส่วนบนสุด -->
  <fieldset>
    <table border="1">
      <tr>
        <td><label>ความเร่งด่วน (Urgency):</label><br><input type="text" name="urgency"></td>
        <td><label>หมายเลขงาน (JOB No.):</label><br><input type="text" name="job_no"></td>
        <td><label>วันที่ (Date):</label><br><input type="date" name="date"></td>
      </tr>
    </table>
  </fieldset>

  <!-- ข้อมูลลูกค้า Customer Detail -->
  <fieldset>
    <legend>ข้อมูลลูกค้า Customer Detail</legend>
    <table border="1">
      <tr>
        <td><label>ลำดับลูกค้า (Customer Segment):</label><br><input type="text" name="customer_segment"></td>
        <td><label>ชื่อบริษัท (Customer):</label><br><input type="text" name="customer_name"></td>
        <td><label>วันที่รับงาน (Employment Date):</label><br><input type="date" name="employment_date"></td>
      </tr>
      <tr>
        <td><label>ชื่องาน (Name Job):</label><br><input type="text" name="job_name"></td>
        <td><label>ลักษณะงาน (Job Description):</label><br><input type="text" name="job_description"></td>
        <td><label>ลักษณะงาน (Packaging):</label><br><input type="text" name="packaging"></td>
      </tr>
      <tr>
        <td><label>ขั้นตอนการทำงาน (Work Process):</label><br><input type="text" name="work_process"></td>
        <td><label>จำนวน (Number):</label><br><input type="number" name="quantity"></td>
        <td><label>คนรับงาน (Job Seeker):</label><br><input type="text" name="job_seeker"></td>
      </tr>
      <tr>
        <td><label>ออกโดย (Out By):</label><br><input type="text" name="out_by"></td>
        <td colspan="2"></td>
      </tr>
    </table>

    <br>
    <h3>Receiving List</h3>
    <table border="1">
      <tr>
        <td><input type="checkbox" name="receiving_list[]" value="die_cut"> แป้นไดคัท (Die Cut)</td>
        <td><input type="checkbox" name="receiving_list[]" value="data_file"> ไฟล์งาน (Data File)</td>
        <td><input type="checkbox" name="receiving_list[]" value="printing"> แบบงานปริ้น (Printing)</td>
        <td><input type="checkbox" name="receiving_list[]" value="drawing"> แบบงาน (Drawing)</td>
        <td><input type="checkbox" name="receiving_list[]" value="artwork"> แบบจากอาร์ตเวิร์ค (Artwork)</td>
        <td><input type="checkbox" name="receiving_list[]" value="sample"> แบบจากตัวอย่าง (Sample)</td>
      </tr>
    </table>

    <br>
    <label>ผู้ตรวจสอบเอกสาร (Document Reviewer):</label><br>
    <input type="text" name="document_reviewer">
  </fieldset>

  <!-- (จะมี Drawing, Laser, Production, QC, Shipping ต่อไป) -->

</form>

</body>
</html>
