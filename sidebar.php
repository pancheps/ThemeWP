<?php
/**
 * Sidebar template
 */
if ( has_nav_menu( 'primary' ) ) : 
?>
          <div class="right">
            <h2>Subnavigation</h2>
            <ul>
              <li> <a href="#">Overview</a></li>
              <li> <a href="#">Designing</a></li>
              <li><a href="#"> Development</a></li>
              <li> <a href="#">Job Management</a></li>
              <li><a href="#"> Specialization</a></li>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h2>Specializations</h2>
            <ul>
              <li><a href="#"> HTML Themes</a></li>
              <li><a href="#"> PSD Themes</a></li>
              <li><a href="#"> Wordpress Themes</a></li>
              <li><a href="#"> XHTML Themes</a></li>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h2>Text Box</h2>
            <p>12 Dec 2015 | <span>0 comments</span><br />
              <strong>Duis nec porttitor lorem</strong><br />
              Mauris et nisi urna nonfaucibus lacus magna. <a href="#"><strong>More »</strong></a></p>
            <p>&nbsp;</p>
            <p>18 Dec 2015 | <span>5 comments</span><br />
              <strong>Aenean interdum</strong><br />
              Vestibulum ante ipsum primis into faucibus orci luctus ultrices antene posuere. <a href="#"><strong>More »</strong></a></p>
            <p>&nbsp;</p>
            <p>4 Jan 2015 | <span>2 comments</span><br />
              <strong>Integer vitae nisl</strong><br />
              Duis volutpat ligula laoreet orci lectus placerat Curabitur lectus malesuada pulvinar. <a href="#"><strong>More »</strong></a></p>
          </div>
<?php endif; ?>