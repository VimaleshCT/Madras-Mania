

    <div class="container">
        <div class="event-details">
            <!-- Event Image -->
            <div class="event-image">
                <img src="<?php echo base_url(); ?>assets/img/events/<?php echo $event['image']; ?>"
                    alt="<?php echo $event['title']; ?>">
            </div>

            <!-- Event Info -->
            <div class="event-info">
                <!-- Title -->
                <h1><?php echo $event['title']; ?></h1>

                <!-- Meta Info (Date, Time, Author) -->
                <div class="event-meta">
                    <!-- Event Date -->
                    <div class="meta-date">
                        <i class="far fa-calendar-alt"></i>
                        <span><?php echo $event['date']; ?></span>
                    </div>

                    <!-- Event Time -->
                    <div class="meta-time">
                        <i class="far fa-clock"></i>
                        <span><?php echo $event['time']; ?></span>
                    </div>

                </div>

                <!-- Event Description -->
                <p><?php echo $event['description']; ?></p>

                <!-- Back Button -->
                <a href="<?php echo base_url(); ?>" class="btn">Back to Events</a>
            </div>
        </div>
    </div>

