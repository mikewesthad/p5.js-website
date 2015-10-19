<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

  <?php include('../../sidebar.php'); ?>
  <?php include('../../download/version.php'); ?>

  <!-- content sections -->
  <div class="column-span">

    <section>
      <div class="attribution">
        This tutorial was made by the Education Working Group, during the p5.js contributor conference at the Frank-Ratchye Studio for Creative Inquiry, Carnegie Mellon University in May of 2015. The contributors to this tutorial include <a href="http://huah.net/jason/">Jason Alderman</a>, <a href="http://tegabrain.com/">Tega Brain</a>, <a href="http://taeyoonchoi.com/">Taeyoon Choi</a> and <a href="http://luisaph.com/">Luisa Pereira</a>.
      </div>
      <img src="assets/0-0.jpg" />

      <p>
        This is a field guide for debugging for everyone—whether you are beginning to code or whether you have been coding for a long time, this guide breaks down the mysterious process of solving problems.
      </p>
      
      <a name="introduction" class="anchor" href="#introduction"><h3 class="start-element tutorial-btn" id="introduction">0. Debugging is a Creative Act</h3></a>
      <div class="info">
        <p>At all levels, programmers encounter bugs and will often spend more time debugging than actually programming the application. You can expect to spend a lot of time doing this and so it is important to develop good strategies for identifying and working through bugs as you learn to program in p5.js.</p>
        <p>
          A bug is a gap between what you think your system is doing, and what it is actually doing. <a target="_blank"
          href="https://vimeo.com/channels/debugging" >Clay Shirky aptly describes </a>a bug as "the moment when there is both a technical problem with your code as well as a problem with your mental picture of what is happening in your code." </p>
          <img src="assets/0-1.jpg" />
        </p>

        <p>You think you are telling the computer one thing, but it is doing something else. It may also be crashing or throwing errors. In order to close the gap, you must investigate. </p>
        <p>When you are working on a project, you may play many different roles. You are an architect when designing and planning your program, an engineer when you are developing it. Then you will be an explorer, discovering the problems and errors and testing it in all the situations in which it needs to run. You are trying to find out where it might break. Finally, when debugging you are a detective, trying to figure out how and why things broke.</p>
        <img class="small" img src="assets/0-3.jpg" />
        <img class="small" img src="assets/0-4.jpg" />
        <img class="small" img src="assets/0-5.png" />
        <img class="small" img src="assets/0-6.jpg" />

        <p>So how can you become a good detective and debug your program? Here are the ten steps that can help you become a good code sleuth. </p>
      </div>
      
      <a name="dont-panic" href='#dont-panic' class="anchor"><h3 class="start-element tutorial-btn" id="Change Perspectives">1. Change Perspectives.</h3></a>
      <div class="info" id="Change perspectives">
        <p>Don't panic.</p>
        <p>When you encounter a bug that you do not know how to solve, stop, pause and take a deep breath. Stand up, say hi to the dog, take a walk or if it's late go get some sleep. When you are frustrated, tired and upset, you are not in a good frame of mind to learn or solve a  problem.</p>
        <p>To find your errors you will need to change perspectives and become the detective. The goal is to find out what the program IS doing, rather than why it's not doing what it's supposed to. We need to get the computer to show us what it's doing.</p>
        <p>The clues are in the values of variables and flow of program.</p>
        <img class="small_center" img src="assets/1-0.jpg" />
      </div>

      <a name="observe-problem" href="#observe-problem" class="anchor"><h3 class="start-element tutorial-btn" id="problem">2. Observe the problem </h3></a>
      <div class="info" id="problem">
        <p>Walk someone through the issue even if they themselves do not know how to program. If no one is around, draft an email explaining what you have done and breaking down what the problem is.</p>
        <img class="med_center" img src="assets/2-1.png" />
        <p>You probably won't need to actually send this email as often the act of writing it will help you to locate and identify what you need to do next. Some programmers have even been known to explain their problem to a friendly inanimate object like a rubber ducky.</p>
        <img class="med_center" img src="assets/2-2.png" />
        <p>
          This is also a good time to add comments to your code that tell you exactly what each of your functions is doing.
          Some coders also print out their code (or a section of it) and go through it line by line, tracing the path of variables and making notes.
        </p>
        <img class="med_center" img src="assets/2-3.jpg" />
      </div>
     
      <a name="before" href="#before" class="anchor"><h3 class="start-element tutorial-btn" id="start">3. Before you start... </h3></a>
      <div class="info" id="start">
        <p>Before doing anything,  save a copy of your code that you can go back to.  While debugging you are likely to introduce other problems, break things or accidentally delete good work.</p>
        <img class="med_center" img src="assets/3-1.png" />
        <p>You don't want to make bigger bugs in the process of debugging.</p>
        <img class="small_center" img src="assets/3-2.png" />
        <p>If you make a mistake or your problem gets more worse, you can always UNDO or revert back to your saved file.</p>
        <img class="med_center" img src="assets/3-3.jpg" /></br>
        <p>You can try version control such as <a href="http://github.com">Github</a>.</p>
        <img src="assets/3-4.png" />
        <p>Write a list of what you are trying, so you can keep track of what still needs to be checked. Be  methodical, it will save you a lot of time in the long run.</p>
        <p>
          Only ever change one thing at a time.
          <img class="med_right" img src="assets/3-5.jpg" />
          As you debug, you will be turning parts of your code on and off.
          Every time you make a change, test your program. If you make multiple changes before testing, you will not know which change has what effect and are likely to break things further.
        </p>
      </div>

      <a name="check-basics" href="#check-basics" class="anchor"><h3 class="start-element tutorial-btn" id="basics">4. Check the basics </h3></a>
      <div class="info" id="basics">
        <p>Many bugs end up being very basic mistakes, equivalent to forgetting to plug in the power cord. These mistakes are so obvious they are often invisible. Check the dumb stuff like...</p>
        <ul>
          <li>Are you editing the file that you are actually running (and not, for example, editing the local file, and looking at a different file on the server)?</li>
          <li>Are all of your external files where you think they are?</li>
          <li>Are your file dependencies correct?</li>
          <li>Are there any typos in your paths?</li>
          <li>Check your server? etc.</li>
        </ul>
        <img src="assets/4-1.png" /></br></br></br>
        <img src="assets/4-2.png" /></br></br></br>
        <img src="assets/4-3.png" /></br>
        
        <a name="black-boxes" href="#black-boxes" class="anchor"><h3 class="start-element tutorial-btn" id="blackboxes">5. Black boxes</h3></a>
        <div class="info">
          <p>A black box describes any part of your system you do not understand the inner workings of. For example, a library or perhaps a function that you have not written for yourself. Systematically take out each black box one-by-one and run your program. This will help to see if these parts of the program contain the error.</p>
          <img class="med_left" img src="assets/5-1.jpg" />
          <img class="med_right" img src="assets/5-2.jpg" /></br></br></br></br></br></br></br>
        </div>

        <a name="error-reporting" href="#error-reporting" class="anchor"><h3 class="start-element tutorial-btn" id="reporting">6. Add error reporting  </h3></a>
        <div class="info" id="reporting">
          <p>
            <img class="med_right" img src="assets/6-1.png" />
            Error reporting is how your program tells you what it is doing.
            p5.js comes with some built-in error reporting that will tell you if you have made specific syntax errors.
          </p>
          
          <p>
            It is also useful to add in your own error reporting using the console.log() function.
            <img class="med_right" img src="assets/6-2.png" />
            To check your program flow, add in console.log() statements to the parts of your code.
            Then when you look at your console you can see the order that things happen and where you encounter problems.
          </p>

          <p>
            It is also useful to add in console.log()s to print out values of variables so that you can see what they are doing.
            <img class="med_center" img src="assets/6-3.jpg" />
          </p>
        </div>

        <a name="search-help" href="#search-help" class="anchor"><h3 class="start-element tutorial-btn" id="help">7. Search for more help </h3></a>
        <div class="info" id="help">
          <p>So none of this works? There are many places you can look online to get more help.</p>
          <ul>
            <li>Do a Google search, if you have had this problem chances are many other people will have too.</li>
            <li>Search the <a href="http://forum.processing.org/two/categories/p5-js">Processing forum</a> using the p5.js tag.</li>
            <li>Search development forums like <a href="http://stackoverflow.com/">Stack Overflow</a>.</li>
          </ul>
          <p> More general javascript resources:</p>
          <ul>
            <li>First chapter of Bocoup's and Rebecca Murphey's interactive textbook, <a href="http://jqfundamentals.com/chapter/javascript-basics">jQuery Fundamentals</a>.</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide">  Mozilla's JavaScript Guide</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference ">JavaScript Reference </a>(this is really helpful for finding all of the built-in methods for, say a String).</li>
            <li>Resources from the <a href="https://github.com/processing/p5.js/wiki/Education">p5.js Education page.</a></li>
          </ul>
          <img class="med_center" img src="assets/7-1.jpg" />
        </div>

        <a name="ask" href="#ask" class="anchor"><h3 class="start-element tutorial-btn" id="people">8. Ask people </h3></a>
        <div class="info" id="people">
          <p>
            Still not working?
            <img class="med_right" img src="assets/8-0.jpg" />
            You can also ask people for help! They might be delighted to help you.
          </p>
          <p>
            Send that email you wrote at the start.<br/>
            Post to the <a href="http://forum.processing.org/two/categories/p5-js">Processing forum</a> succinctly articulating your problem and what you want to know. <br/>
          </p>
        </div>
        
        <a name="prevention" href="#prevention" class="anchor"><h3 class="start-element tutorial-btn" id="prevent">9. Good coding practices and how to prevent bugs!</h3></a>
        <div class="info" id="prevent">
          <p>
            <ul>
              <li>Do not optimize prematurely. Clear code is more important than high-performing code as you're building your program.</li>
              <li>Do not abstract prematurely. You don't need to make functions for things you think you're going to use multiple times...until you actually have to use it more than once.</li>
              <li>
                Start with pseudocode as comments, then add code underneath each step.<br/>
                Put console.log()s in your code as you develop (and test frequently—so if something changes, you know what you did since the last time you tested).<br/>
              </li>
            </ul>
          </p>
          <p>ALSO: start with small problems! Do one thing at a time. It's ok to make smaller sketches to test one thing (draw a star! check twitter!) and then voltron them together into a bigger sketch (draw a star that turns red when you have a notification on twitter!)</p>
          <img class="med_center" img src="assets/9-1.jpg" />
        </div>

        <a name="more-resources" href="#more-resources" class="anchor"><h3 class="start-element tutorial-btn" id="help">10. More resources </h3></a>
        <div class="info" id="resources">
          <p>
            This guide has been inspired by several other fantastic resources on debugging when coding. Some of these are here:
            <ul>
              <li>Matt Gemmel, <a href="http://mattgemmell.com/what-have-you-tried/">What have you tried?</a></li>
              <li>Clay Shirky, <a href="https://vimeo.com/channels/debugging">A brief introduction to debugging</a></li>
              <li>Eric Steven Raymond, <a href="http://www.catb.org/esr/faqs/smart-questions.html"> How to ask questions the smart way</a></li>
              <li>ITP Residents, <a href="https://docs.google.com/presentation/d/1RXzITwS4otVKnYkuNu2w7CrpYy35WBO2HUlmkSc2p8g/edit?copiedFromTrash#slide=id.g2ffb36b3_0_44">10 Tips for Debugging</a></li>
              <li>Rurouni Jones, <a href="http://rurounijones.github.io/blog/2009/03/17/how-to-ask-for-help-on-irc//">How to ask for help on IRC</a></li>
            </ul>
          </p>
        </div>



      </section> 
      <?php include('../../footer.php'); ?>
      <!-- outside of column for footer to go across both -->

      <p class="clearfix"> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type="image/svg+xml" data="../../img/thick-asterisk-alone.svg" id="asterisk-design-element">
      *<!-- to do: add fallback image in CSS -->
    </object>

    <?php include('../../end.php'); ?>
  </body>
</html>
