<?php include('includes/header.php'); ?>

<style>
    body{
        background-color:white;
    }
    .about-hero {
        background-color:white;
        color: black;
        padding: 50px 20px;
        text-align: center;
    }

    .about-hero h1 {
        font-size: 3em;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .about-hero p {
        font-size: 1.3em;
        max-width: 800px;
        margin: 0 auto;
    }

    .about-content {
        max-width: 1000px;
        margin: 30px auto;
        padding: 0 20px;
    }

    .section {
        margin-bottom: 50px;
        padding: 30px;
        background: #f8f9faff;
        border-radius: 10px;
        border-left: 5px solid #4B4B4B;
    }

    .section h2 {
        color: #0f1110ff;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 2em;
    }

    .section p {
        line-height: 1.8;
        font-size: 1.05em;
        color: #4B4B4B;
    }

    .team-section {
        background: white;
        padding: 40px;
        border-radius: 10px;
        text-align: center;
    }

    .team-member {
        background: linear-gradient(135deg, #4B4B4B; 0%, #292525ff; 100%);
        color: white;
        padding: 30px;
        border-radius: 10px;
        margin: 20px 0;
    }

    .team-member h3 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .team-member p {
        font-size: 1.1em;
        margin: 10px 0;
    }

    .mission-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .mission-card {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-top: 5px solid #4B4B4B;";
    }

    .mission-card h4 {
        color: ##4B4B4B;
        font-weight: bold;
        margin-bottom: 15px;
        font-size: 1.3em;
    }

    .mission-card p {
        color: #4B4B4B;
        line-height: 1.6;
    }
</style>

<div class="about-hero"style="background-color:white;">
    <h2 class="text-center text-dark fw-bold mb-4">About Sudha Suman Foundation</h2>
    <p class="text-center text-dark fw-bold mb-4">Empowering communities, transforming lives, creating sustainable change</p>
</div>


<div class="about-content"style="background-color:white;">
    <!-- Organization Section -->
    <div class="section" style="background:linear-gradient(135deg, white243, 245, 247, 1) 0%, #f7f8faff 100%)";>
        <h2>🏢 About Our Organization</h2>
        <p>
            Sudha Suman Foundation is a non-profit organization dedicated to social welfare and community development. 
            We believe that every individual deserves access to quality education, healthcare, and opportunities for economic 
            growth. Our mission is to create a positive impact on society by empowering women, supporting children's education, 
            and promoting environmental awareness.
        </p>
        <p>
            Founded with a vision to bring about meaningful change in our communities, we work tirelessly to address social 
            inequalities and create sustainable solutions for underprivileged sections of society.
        </p>
    </div>



    <!-- Our Mission -->
    <div class="section" style="background:linear-gradient(135deg, white243, 245, 247, 1) 0%, #f7f8faff 100%)";>
        <h2>🎯 Our Mission</h2>
        <div class="mission-cards" >
            <div class="mission-card" style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)";>
                <h4>Women Empowerment</h4>
                <p>We provide vocational training, skill development, and financial literacy programs to help women become self-reliant and independent.</p>
            </div>
            <div class="mission-card" style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)";>
                <h4>Child Education</h4>
                <p>We ensure access to quality education for underprivileged children through scholarship programs and learning material distribution.</p>
            </div>
            <div class="mission-card" style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)";>
                <h4>Health & Wellness</h4>
                <p>We organize medical camps, health awareness programs, and promote preventive healthcare in rural and urban areas.</p>
            </div>
            <div class="mission-card" style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)";>
                <h4>Environment Protection</h4>
                <p>We promote environmental consciousness and sustainability through tree plantation drives and eco-awareness campaigns.</p>
            </div>
        </div>
    </section>

    <!-- Our Vision -->
    <div class="section"style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)";>
        <h2>👁️ Our Vision</h2>
        <p>
            To create a society where every individual has access to education, healthcare, and economic opportunities. 
            We envision a world where women are empowered, children are educated, and communities are sustainable and self-sufficient.
        </p>
    </div>

    <!-- Our Values -->
    <div class="section" style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)"; >
        <h2>💎 Our Core Values</h2>
        <ul style="line-height: 2; font-size: 1.05em; color: #333;">
            <li><strong>Integrity:</strong> We operate with honesty and transparency in all our endeavors</li>
            <li><strong>Compassion:</strong> We are deeply committed to serving those in need</li>
            <li><strong>Empowerment:</strong> We believe in enabling people to achieve their potential</li>
            <li><strong>Sustainability:</strong> We focus on long-term positive impact and change</li>
            <li><strong>Inclusivity:</strong> We welcome all individuals and celebrate diversity</li>
        </ul>
    </div>

    <!-- Founder Section -->
    <div class="team-section">
        <h2 style="color: #010101ff; margin-bottom: 30px;">👤 Meet Our Team</h2>
        
        <div class="team-member" style="background:linear-gradient(135deg, rgba(243, 245, 247, 1) 0%, #f7f8faff 100%)";>
            <h3 style="color:black;">Rahul Maurya</h3>
            <p><strong>Founder & Executive Director</strong></p>
            <p>
                Rahul Maurya is the visionary founder of Sudha Suman Foundation. With a passion for social welfare and community development, 
                he leads our organization with dedication and commitment. His vision is to create sustainable change and empower marginalized 
                communities through education, healthcare, and economic opportunities.
            </p>
            <p style="margin-top: 15px;">
                Under his leadership, the foundation has successfully impacted thousands of lives through various social initiatives 
                and community welfare programs.
            </p>
        </div>
    </div>

    <!-- Impact Section -->
    <div class="section" style="bbackground: linear-gradient(135deg, #e6e8eb 0%, #dfe2e6 100%)";>
        <h2>📊 Our Impact</h2>
        <p>
            Since our inception, Sudha Suman Foundation has made a significant impact on communities:
        </p>
        <ul style="line-height: 2; font-size: 1.05em; color: #333; margin-top: 20px;">
            <li>✓ Provided education to hundreds of underprivileged children</li>
            <li>✓ Empowered numerous women through vocational training programs</li>
            <li>✓ Organized multiple medical camps serving thousands of people</li>
            <li>✓ Conducted environmental awareness campaigns and tree plantation drives</li>
            <li>✓ Built a strong network of volunteers and supporters</li>
        </ul>
    </div>
<div>
    <!-- Call to Action -->
    <div class="section-1" style="background:linear-gradient(135deg, #3c3a3aff 0%, #4B4B4B 100%); color: white; text-align: center; border: none;
    padding-top: 30px;">
        <h2 style="color: white; margin-bottom: 20px;">Join Us in Making a Difference</h2>
        <p style="color: white; font-size: 1.1em; margin-bottom: 20px;">
            Whether you want to volunteer, donate, or partner with us, we'd love to hear from you!
        </p>
        <a href="contact.php" class="btn btn-light btn-lg">Get In Touch</a>
    </div>
</div>
</div>
</div>

<?php include('includes/footer.php'); ?>
