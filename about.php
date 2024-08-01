<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        color: #333;
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
          ),
          url("https://image.slidesdocs.com/responsive-images/background/high-definition-microscopic-image-of-pure-water-droplets-powerpoint-background_a86a1d3e1d__960_540.jpg");
        background-size: cover;
        background-attachment: fixed;
        transition: background 0.5s ease-in-out;
      }
      .one {
        width: auto;
        height: 260px;
        font: 400 1em/1.5 "Neuton";
        background-color: rgba(0, 0, 0, 0.1);
        color: rgba(22, 205, 229, 0.25);
        text-align: center;
        margin-top: 00px;
        opacity: 1;
      }

      #about {
        text-transform: uppercase;
        letter-spacing: 0.5em;
        display: inline-block;
        border: 4px double rgba(36, 198, 213, 0.25);
        border-width: 4px 0;
        padding: 1.5em 0em;
        position: absolute;
        top: 4%;
        left: 50%;
        width: 40em;
        margin: 0 0 0 -20em;

        span {
          font: 700 4em/1 "Oswald", sans-serif;
          letter-spacing: 0;
          padding: 0.25em 0 0.325em;
          display: block;
          margin: 0 auto;
          text-shadow: 0 0 80px rgba(22, 130, 160, 0.5);

          /* Clip Background Image */

          background: url(https://i.ibb.co/RDTnNrT/animated-text-fill.png)
            repeat-y;
          -webkit-background-clip: text;
          background-clip: text;

          /* Animate Background Image */

          -webkit-text-fill-color: transparent;
          -webkit-animation: aitf 80s linear infinite;

          /* Activate hardware acceleration for smoother animations */

          -webkit-transform: translate3d(0, 0, 0);
          -webkit-backface-visibility: hidden;
        }
      }

      /* Animate Background Image */

      @-webkit-keyframes aitf {
        0% {
          background-position: 0% 50%;
        }
        100% {
          background-position: 100% 50%;
        }
      }

      .hero {
        height: 400px;
        text-align: center;
        padding-top: 100px;
        position: relative;
        color: white;
        margin-bottom: 100px;
      }

      .hero h1 {
        font-size: 48px;
        margin: 0;
        margin-top: -100px;
        font-size: clamp(4rem, 7vw, 8rem);
        position: relative;
        animation: fadeInSimple 2s ease-in-out;
      }

      .hero p {
        font-size: 18px;
        margin-top: 10px;
        color: white;
        animation: fadeIn 2s ease-in-out 1s both;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      @keyframes fadeInSimple {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      .content {
        color: white;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
        margin-top: -150px;
        background: rgba(0, 0, 0, 0.7);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        animation: fadeInUp 2s ease-in-out;
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .content h2 {
        font-size: 28px;
        margin-bottom: 10px;
        position: relative;
      }

      .content h2::after {
        content: "";
        display: block;
        width: 50px;
        height: 3px;
        background: #f39c12;
        position: absolute;
        left: 0;
        bottom: -10px;
      }

      .content ul {
        list-style: disc;
        margin-left: 20px;
      }

      .content ul li {
        margin-bottom: 10px;
        transition: transform 0.3s, background-color 0.3s;
      }

      .content ul li:hover {
        transform: translateX(10px);
        background-color: rgba(255, 255, 255, 0.1);
        padding-left: 10px;
      }

      footer {
        background: rgba(51, 51, 51, 0.9);
        color: #fff;
        text-align: center;
        padding: 10px 0;
        margin-top: 20px;
        box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        transition: background 0.5s ease-in-out;
      }

      footer:hover {
        background: rgba(51, 51, 51, 1);
      }

      footer ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      footer ul li {
        display: inline;
        margin: 0 15px;
      }

      footer ul li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
      }

      footer ul li a:hover {
        color: #f39c12;
      }

      /* Reset CSS */
      *,
      *::before,
      *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <section class="hero">
      <div class="one">
        <p id="about">
          <span> About Our Platform </span>
          Tackling water-related disasters with innovative crisis management
          strategies.
        </p>
      </div>
    </section>
    <section class="content">
      <h2>Our Mission</h2>
      <p>
        The escalating frequency and severity of water-related disasters
        emphasize the urgent necessity for innovative crisis management
        strategies. To confront this pressing issue, our project proposes the
        creation of a comprehensive web-based platform.
      </p>

      <h2>Key Features</h2>
      <ul>
        <li>
          <strong>Comprehensive Identification and Categorization:</strong>
          Tailored to identify and categorize various water-related concerns,
          including flooding, water quality degradation, and urban drainage
          issues.
        </li>
        <li>
          <strong>User-Friendly Interface:</strong> Allows individuals to
          effortlessly upload ground-level images of incidents, facilitating
          precise issue localization.
        </li>
        <li>
          <strong>Advanced Analytical Tools:</strong> Automatically scrutinize
          and categorize identified problems, providing vital situational
          awareness for emergency responders and administrators.
        </li>
        <li>
          <strong>Real-Time Decision Making:</strong> Facilitates prompt
          decision-making and efficient resource allocation during crisis
          scenarios.
        </li>
      </ul>

      <h2>Technological Integration</h2>
      <p>
        Through the integration of user-provided data and the utilization of
        cutting-edge technologies, our platform aims to furnish a comprehensive
        tool for disaster response and crisis mitigation in water management.
      </p>

      <h2>Collaborative Efforts</h2>
      <p>
        Collaborative endeavors among citizens, emergency responders, and
        administrators constitute the cornerstone of this initiative, aimed at
        bolstering resilience to water-related disasters.
      </p>

      <h2>Sustainable Water Management</h2>
      <p>
        By streamlining overall water resource management practices and
        fostering a more cohesive and efficient response to crises, the project
        endeavors to ensure the sustainable management of water resources amidst
        escalating challenges.
      </p>

      <h2>Our Vision</h2>
      <p>
        Ultimately, this proactive and forward-thinking web-based platform
        epitomizes a holistic approach to addressing the multifaceted challenges
        posed by water-related disasters in today's rapidly evolving world.
      </p>
    </section>

    <footer>
      <ul>
        <li><a href="#mission">Mission</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#tech">Technology</a></li>
        <li><a href="#collaboration">Collaboration</a></li>
        <li><a href="#sustainability">Sustainability</a></li>
        <li><a href="#vision">Vision</a></li>
      </ul>
    </footer>
  </body>
</html>