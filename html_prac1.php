<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Haider">
    <meta name="description" content="Personal portfolio webpage">
    <meta name="keywords" content="portfolio, Haider, student">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haider | Portfolio</title>
</head>

<body>

    <header>
        <h1>Haider</h1>
        <nav>
            <a href="#bio">About</a> |
            <a href="#education">Education</a> |
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

        <section id="bio">
            <h2>About Me</h2>
            <p>I am a Computer Science and Engineering student preparing for internship opportunities.</p>
        </section>

        <section id="education">
            <h2>Educational Qualifications</h2>

            <table border="1" cellpadding="5">
                <tr>
                    <th>Degree</th>
                    <th>Institution</th>
                    <th>Year</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td>B.Sc in CSE</td>
                    <td>AIUB</td>
                    <td>Ongoing</td>
                    <td>N/A</td>
                </tr>

                <tr>
                    <td>HSC</td>
                    <td>[College Name]</td>
                    <td>[Year]</td>
                    <td>[GPA]</td>
                </tr>

                <tr>
                    <td>SSC</td>
                    <td>[School Name]</td>
                    <td>[Year]</td>
                    <td>[GPA]</td>
                </tr>
            </table>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>

            <form>
                <label>Name:</label><br>
                <input type="text" required><br><br>

                <label>Email:</label><br>
                <input type="email" required><br><br>

                <label>Message:</label><br>
                <textarea rows="4" required></textarea><br><br>

                <button type="submit">Send</button>
            </form>
        </section>

    </main>

    <footer>
        <p>© 2025 Haider</p>
    </footer>

</body>
</html>
