<?php if (sizeof($courses) > 0) { ?>
    <?php if (sizeof($courses) == 1) { ?>
        <h2>Update Course</h2>
    <?php } else { ?>
        <h2>Update Courses</h2>
    <?php } ?>
    <?php foreach ($courses as $course) : ?>
        <form action="." method="post">
            <input type="hidden" name="course_id" value="<?= $course['courseID']; ?>">
            <input type="text" name="course_name" value="<?= htmlspecialchars($course['courseName']); ?>">
            <button name="action" value="update_course">Update</button>
        </form>
    <?php endforeach ?>
<?php } ?>