<x-layout.main>
    <body class="starbg">
    <section class="dashboard">
        <h1 class="center">Study Monitor</h1>
        <hr>
        <h2>Progress</h2>
        <p>Total Credits: <strong id="total-credits">0/60 EC</strong></p>
        <div class="progress-bar">
            <div class="progress-bar-fill" id="progress-bar-fill" style="width: 0%;">0%</div>
        </div>
        <p>NBSA Boundary: <strong>45 EC</strong> (Need at least 45 EC to pass)</p>


        <h2>Course 1: Introduction to Computer Science</h2>
        <table>
            <tr>
                <th class="first-column">Test Item</th>
                <th class="second-column">Assessment</th>
                <th>Grade</th>
                <th>Max EC</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Program- and Career Orientation (CU75001V3)</td>
                <td>Presentation</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="2.5"></td>
                <td>2.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Computer Science Basics (CU75002V2)</td>
                <td>Written knowledge test</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="5"></td>
                <td>5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Programming Basics (CU75003V1)</td>
                <td>Case Study Exam</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="5"></td>
                <td>5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Personal Professional Development Exploration (CU75068V3)</td>
                <td>Criterium focused interview</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="12.5"></td>
                <td>12.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
        </table>

        <h2>Course 2: Game Development</h2>
        <table>
            <tr>
                <th class="first-column">Test Item</th>
                <th class="second-column">Assessment</th>
                <th>Grade</th>
                <th>Max EC</th>
                <th>Status</th>
            </tr>
            <tr>
                <td rowspan="2">Object-Oriented Programming (CU75004V1)</td>
                <td>Presentation</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="5"></td>
                <td>5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Written Knowledge test</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="5"></td>
                <td>5 EC</td>
                <td class="pending">Pending</td>
            </tr>
        </table>

        <h2>Course 3: Modern Software Development 1</h2>
        <table>
            <tr>
                <th class="first-column">Test Item</th>
                <th class="second-column">Assessment</th>
                <th>Grade</th>
                <th>Max EC</th>
                <th>Status</th>
            </tr>
            <!-- First part -->
            <tr>
                <td rowspan="4">Framework Project 1 (CU75080V2)</td>
                <td>Case Study Exam</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="4"></td>
                <td>4 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Database exam</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="1"></td>
                <td>1 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Group presentation</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="2.5"></td>
                <td>2.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Group porfolio</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="2.5"></td>
                <td>2.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <!-- Second part -->
            <tr>
                <td>Business IT Consultancy Basics (CU75081V1)</td>
                <td>Video</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="2.5"></td>
                <td>2.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
        </table>

        <h2>Course 4: Modern Software Development 2</h2>
        <table>
            <tr>
                <th class="first-column">Test Item</th>
                <th class="second-column">Assessment</th>
                <th>Grade</th>
                <th>Max EC</th>
                <th>Status</th>
            </tr>
            <tr>
                <td rowspan="3">Framework Project 2 (CU75011V3)</td>
                <td>Final group delivery</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="2.5"></td>
                <td>2.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Individual project</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="2.5"></td>
                <td>2.5 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>IT Development portfolio</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="5"></td>
                <td>5 EC</td>
                <td class="pending">Pending</td>
            </tr>
        </table>

        <h2>Extra (choice)</h2>
        <table>
            <tr>
                <th class="first-column">Test Item</th>
                <th class="second-column">Assessment</th>
                <th>Grade</th>
                <th>Max EC</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>IT Personality 1  (CU75056V1)</td>
                <td>Portfolio</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="1.25"></td>
                <td>1.25 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>IT Personality 2 (CU75057V1)</td>
                <td>Portfolio</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="1.25"></td>
                <td>1.25 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>IT Personality International week (CU75055V1)</td>
                <td>Portfolio</td>
                <td><input type="number" min="0" max="10" step="0.1" data-max="1.25"></td>
                <td>1.25 EC</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>IT Personality Projectweek 1 (CU75054V1)</td>
                <td>Portfolio</td>
                <td><input type="number" min="0" max="10" step="0.05" data-max="1.25"></td>
                <td>1.25 EC</td>
                <td class="pending">Pending</td>
            </tr>
        </table>
    </section>
    </body>
</x-layout.main>
