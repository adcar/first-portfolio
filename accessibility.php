<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php include 'favicon.php'; ?>
    <title>Accessibility Website | Alexander Cardosi</title>
    <?php include 'assets.php'; ?>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <main>
      <div class="project">
        <article class="project-article">
          <h1>Accessibility Website</h1>
          <small>Website Creation</small>
          <p>In the Accessibility Website project, the goal was to create website with the appropriate practices in place for accessibility, which follow the Web Accessibility Initiative (WAI)'s guidelines. I chose this assignment as it relates heavily to my partner and my upcoming SkillsUSA Champions competition. In order to follow the WAI guidelines, I wanted to incorporate something called Accessible Rich Internet Applications (ARIA). Aria allows screen readers to easily tell what elements on a page are. Screen readers utilize visual progression by reading content starting at the top, and move down until they&rsquo;ve reached the end.<br><br>
          I wanted this website to feel bare-bones, and efficient. The purpose and main focus this project was the accessibility aspect, so that screen readers can easily read elements of the page. I was also targeting people with some visual impairment as well, not just complete blindness. To allow these users to have a good experience, I had to make sure everything looked normal and legible when the screen was zoomed in. This worked perfectly, so I knew that fonts would be legible to those with visual impairments. I also made sure all text had great contrast with its background. In order to create this contrast, I made sure that anywhere text was located had a completely opaque background. Semi-transparent backgrounds with overlaying text is less legible than a solid color.<br><br>
          In order to create this website, I made sure to carefully read WAI-ARIA&rsquo;s documentation, and follow everything properly. This was an important resource because if I wasn&rsquo;t clear on something I could look back on the documentation and reduce confusion. I used Atom as a text editor, which is my usual choice for something like this. I used SCSS (Sass CSS) for styling, and made sure to utilize HTML5 semantic elements (e.g. section, form, nav, article, etc) in my HTML code. I didn&rsquo;t utilize any Javascript or PHP for this project as I felt it was unnecessary and would only put a pointless strain on the client or server load.<br><br>
          When it comes to changes I would&rsquo;ve made on the site, there isn&rsquo;t much. I would do some more research on the role attribute and see if it really is necessary to specify role=&rdquo;navigation&rdquo; on a nav element. At the time I had read an article saying I needed to do this, but looking back I believe that article was outdated. I learned a lot from this project. I dissected the WAI documentation and figured out just how to create a legible website for those with visual impairments or complete visual loss. I can now create a clean looking website that follows the WAI guidelines.<br>
          </p>
        </article>
        <div class="before-after">
          <figure class="card">
            <a href="http://www.cawdvt.org/students/acardosi/week_33/20/"><img src="img/accessibility.png" alt="Accessibility Website"></a>
            <figcaption>Website</figcaption>
          </figure>
          <figure class="card" id="access-code">
            <a href="https://gist.githubusercontent.com/anonymous/8c5d2673b50b11d75113b99101f5c00f/raw/c54100edf0d71866a486aff1211f9e1a8ad2c759/index.html"><img src="img/accessibility-code.png" alt="Accessibility Website Code"></a>
            <figcaption>Underlying HTML</figcaption>
          </figure>
        </div>
      </div>
    </main>
    <?php include 'footer.php' ?>
  </body>
</html>
