<?php
// fail grade link + number here
$target1 = "add numeric value here from db";
$linkname1 = "https://giphy.com/gifs/next-time-S4BDGxHKIB6nW9PiyA?utm_source=media-link&utm_medium=landing&utm_campaign=Media%20Links&utm_term=https://giphy.com/"; 

// just passing grade link + number here
$target2 = "add numeric value here from db";
$linkname2 = "https://www.joyce.edu/blog/study-tips-to-retain-information/"; 

// high grade link + number here
$target3 = "add numeric value here from db";
$linkname3 = "https://i.pinimg.com/originals/af/ff/52/afff522b4f568a7c897c8511b66dcb35.gif"; 

// class topper link + number here
$target4 = "add numeric value here from db";
$linkname4 = "https://www.oxfordlearning.com/how-to-study-effectively/"; 

link1($target1,$linkname1);
link2($target2,$linkname2);
link3($target3,$linkname3);
link4($target4,$linkname4);
?>

<div class="tm-sc-section-title section-title text-center">
    <div class="title-wrapper">
        <h2 class="title">Resource <span class="text-theme-colored3">Section</span></h2>
    </div>
</div>
<table>
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Grade Recieved</th>
      <th scope="col">Resource Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Subject">English</td>
      <td data-label="Grade Recieved">Add Fail Grade Here</td>
      <td data-label="Resource Link">https://giphy.com/gifs/next-time-S4BDGxHKIB6nW9PiyA?utm_source=media-link&utm_medium=landing&utm_campaign=Media%20Links&utm_term=https://giphy.com/</td>
    </tr>
    <tr>
      <td scope="row" data-label="Subject">Maths</td>
      <td data-label="Grade Recieved">Add Medium Grade Here</td>
      <td data-label="Resource Link">https://www.joyce.edu/blog/study-tips-to-retain-information/</td>
    </tr>
    <tr>
      <td scope="row" data-label="Subject">Urdu</td>
      <td data-label="Grade Recieved">Add Good Grade Here</td>
      <td data-label="Resource Link">https://i.pinimg.com/originals/af/ff/52/afff522b4f568a7c897c8511b66dcb35.gif</td>
    </tr>
    <tr>
      <td scope="row" data-label="Subject">Islamiat</td>
      <td data-label="Grade Recieved">Add Perfect Grade Here</td>
      <td data-label="Resource Link">https://www.oxfordlearning.com/how-to-study-effectively/</td>
    </tr>
  </tbody>
</table>