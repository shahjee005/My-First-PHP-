  
<nav>
  <h2>Website Navigation</h2>
  <ul>
    <li>
      <a href="./index.php">Home</a>
    </li>
    <li>
      <a href="./phpinfo.php">
        PHP Info
        <strong style="color: red;">
          NEVER DO THIS IN A REAL WEBSITE
        </strong>
      </a>
    </li>
    <li>
      <a href="./form.php">Form</a>
    </li>
    <li>
      <a href="./arrays.php">Arrays</a>
    </li>
    <li>
      <a href="./oop.php">OOP</a>
    </li>
    <li>
      <a href="./oop-and-file.php">OOP and File Retrieval / Reading</a>
    </li>
    <li>
      <a href="./api-request-test.php">API Request Test (JS + Endpoint)</a>
    </li>
    <li>
      <a href="./api-external-php-test.php">API Request Test (PHP + Endpoint)</a>
    </li>
  </ul>
</nav>
<?php // By default, anything written in a PHP file will be sent to
      // the browser (or whatever client made the request.) See above,
      // we have some HTML outputting, as we did not include any PHP
      // tags (<?php etc.) that would tell PHP otherwise.