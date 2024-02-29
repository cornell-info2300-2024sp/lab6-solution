<?php
/* Note: No credit is provided for submitting design and/or code that is     */
/*       taken from course-provided examples.                                */
/*                                                                           */
/* Do not copy this code into your project submission and then change it.    */
/*                                                                           */
/* Write your own code from scratch. Use this example as a REFERENCE only.   */
/*                                                                           */
/* You may not copy this code, change a few names/variables, and then claim  */
/* it as your own.                                                           */
/*                                                                           */
/* Examples are provided to help you learn. Copying the example and then     */
/* changing it a bit, does not help you learn the learning objectives of     */
/* this assignment. You need to write your own code from scratch to help you */
/* learn.                                                                    */

$page_title = 'Product Reviews';

$nav_reviews_class = 'active_page';

const RATING_STARS = array(
  1 => '★☆☆☆☆',
  2 => '★★☆☆☆',
  3 => '★★★☆☆',
  4 => '★★★★☆',
  5 => '★★★★★'
);

// TODO: 1. load the database library

// TODO: 2. open database
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="reviews">
    <h2><?php echo $page_title; ?></h2>

    <!-- Note: You may not copy the instructor's code/design and submit it  -->
    <!--       as your own.                                                 -->
    <!--                                                                    -->
    <!-- We studied textual catalog design patterns in class, there are     -->
    <!-- many design alternatives for for presenting textual information.   -->
    <!-- You may use this design for inspiration. However, you must design  -->
    <!-- your own.                                                          -->
    <!--                                                                    -->
    <!-- Remember, design is a learning objective of this class. Your your  -->
    <!-- future employers will expect you to  be able to design on your own -->
    <!-- without copying someone else's work. Use this experience as        -->
    <!-- practice.                                                          -->

    <ul>
      <?php
      // TODO: 3. query the reviews table

      // TODO: 4. get all records from query

      // TODO: 5. create a review tile (review tile partial) for each record
      include 'includes/review-tile.php';
      ?>
    </ul>

  </main>

  <?php include 'includes/footer.php' ?>
</body>

</html>
