<?php if (sizeof($assignments) > 0) { ?>
    <?php if (sizeof($assignments) == 1) { ?>
        <h2>Update Assignment</h2>
    <?php } else { ?>
        <h2>Update Assignments</h2>
    <?php } ?>
    <?php foreach ($assignments as $assignment) { ?>
        <form action="." method="post">
            <input type="hidden" name="assignment_id" value=<?= $assignment["ID"] ?>>
            <label for="description"><?= htmlspecialchars($assignment['courseName']); ?></label>
            <input type=" text" name="description" maxlength="120" value="<?= htmlspecialchars($assignment['Description']) ?>">

            <select name="course_id" required>
                <?php foreach ($courses as $course) : ?>

                    <option value="<?= $course['courseID'] ?>" <?php if ($course['courseName'] == $assignment['courseName']) {
                                                                    echo 'selected';
                                                                } ?>>
                        <?= htmlspecialchars($course['courseName']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" name="action" value="update_assignment">Update</button>
        </form>

    <?php } ?>
<?php } ?>