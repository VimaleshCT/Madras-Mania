<div class="container mt-5">
    <h2 class="mb-5" style="color:#eabf33;">Manage Events</h2>

    <!-- Add New Event Button -->
    <a href="javascript:void(0);" class="btn btn-success btn-rounded text-white" data-bs-toggle="modal"
        data-bs-target="#addEventModal">Add New Event</a>

    <!-- Event Table -->
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $event): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($event['title']); ?></td>
                            <td><?php echo htmlspecialchars($event['date']); ?></td>
                            <td><?php echo htmlspecialchars($event['time']); ?></td>
                            <td><?php echo htmlspecialchars($event['description']); ?></td>
                            <td>
                                <?php if (!empty($event['image'])): ?>
                                    <img src="<?php echo base_url('assets/img/events/' . htmlspecialchars($event['image'])); ?>"
                                        style="width: 90px; height: 90px;">
                                <?php endif; ?>
                            </td>
                            <td>
                                <div style="display: flex; gap: 5px;">
                                    <!-- Edit Button -->
                                    <a href="javascript:void(0);" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editEventModal<?php echo $event['id']; ?>">Edit</a>
                                    <!-- Delete Button -->
                                    <a href="<?php echo base_url('admin/delete_event/' . $event['id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this event?');">Delete</a>
                                </div>
                            </td>
                        </tr>

                        <!-- Edit Event Modal (For each event) -->
                        <div class="modal fade" id="editEventModal<?php echo $event['id']; ?>" tabindex="-1"
                            aria-labelledby="editEventModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="post" enctype="multipart/form-data"
                                        action="<?php echo base_url('admin/update_event/' . $event['id']); ?>">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="title">Event Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="<?php echo htmlspecialchars($event['title']); ?>" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="date">Event Date</label>
                                                <input type="date" name="date" class="form-control"
                                                    value="<?php echo htmlspecialchars($event['date']); ?>" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="time">Event Time</label>
                                                <input type="time" name="time" class="form-control"
                                                    value="<?php echo htmlspecialchars($event['time']); ?>" required>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="description">Event Description</label>
                                                <textarea name="description" class="form-control" rows="3"
                                                    required><?php echo htmlspecialchars($event['description']); ?></textarea>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="image">Event Image</label>
                                                <!-- File Input for Image Upload -->
                                                <input type="file" name="image" class="form-control"
                                                    id="imageInput<?php echo $event['id']; ?>"
                                                    onchange="previewImage(<?php echo $event['id']; ?>)">

                                                <!-- Image Preview Box -->
                                                <div class="mt-2">
                                                    <?php if (!empty($event['image'])): ?>
                                                        <img id="previewImage<?php echo $event['id']; ?>"
                                                            src="<?php echo base_url('assets/img/events/' . htmlspecialchars($event['image'])); ?>"
                                                            style="width: 100px; height: 100px; object-fit: cover;">
                                                    <?php else: ?>
                                                        <img id="previewImage<?php echo $event['id']; ?>"
                                                            style="width: 100px; height: 100px; object-fit: cover; display: none;">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update Event</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- JavaScript to handle image preview -->
<script>
    function previewImage(eventId) {
        const input = document.getElementById('imageInput' + eventId);
        const preview = document.getElementById('previewImage' + eventId);

        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Image Preview for Add Event Modal
        const eventImageUpload = document.getElementById("eventImageUpload");
        const eventImagePreview = document.getElementById("eventImagePreview");

        eventImageUpload.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    eventImagePreview.style.backgroundImage = "url(" + e.target.result + ")";
                };
                reader.readAsDataURL(file);
            }
        });

        // Image Preview for Edit Event Modals
        <?php foreach ($events as $event): ?>
            const imageUploadEditEvent<?php echo $event['id']; ?> = document.getElementById("imageUploadEditEvent<?php echo $event['id']; ?>");
            const imagePreviewEditEvent<?php echo $event['id']; ?> = document.getElementById("imagePreviewEditEvent<?php echo $event['id']; ?>");

            imageUploadEditEvent<?php echo $event['id']; ?>.addEventListener("change", function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreviewEditEvent<?php echo $event['id']; ?>.style.backgroundImage = "url(" + e.target.result + ")";
                    };
                    reader.readAsDataURL(file);
                }
            });
        <?php endforeach; ?>
    });
</script>