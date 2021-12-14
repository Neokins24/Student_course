<div class="modal fade" id="add_subject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Subject</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_subject.php" method="post">
        <div class="modal-body">
        <div class="form-floating mb-3">
              <input type="text" class="form-control" id="subject_code" name="subject_code" placeholder="Subject code" value="<?php echo $row['subject_code']; ?>">
              <label for="floatingInput">Subject Code</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="course_id" name="course_id" placeholder="Course Id" value="<?php echo $row['course_id']; ?>">
              <label for="floatingInput">Course ID</label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="course_description" name="course_description" aria-label="Floating label select example" value="<?php echo $row['course_description']; ?>">
                <option selected><?php echo $row['course_description']; ?></option>
                <option value="BSCS">BSCS</option>
                <option value="BSIT">BSIT</option>
                <option value="MIT">MIT</option>
              </select>
              <label for="floatingSelect">Course Description</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="total_units" name="total_units" placeholder="Total Units">
              <label for="floatingInput">Total Units</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="with_lab_component" name="with_lab_component" placeholder="With Lab Component" value="<?php echo $row['with_lab_component']; ?>">
              <label for="floatingInput">With Lab Component</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>