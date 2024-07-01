<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameVille - Video Game E-commerce Platform</title>
</head>
<body>

<h1>GameVille - Video Game E-commerce Platform</h1>

<h2>Table of Contents</h2>
<ul>
    <li><a href="#introduction">Introduction</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#technologies-used">Technologies Used</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
</ul>

<h2 id="introduction">Introduction</h2>
<p>GameVille is an e-commerce platform designed to provide video game enthusiasts with an easy and secure shopping experience. The platform offers a wide range of video games, from the latest releases to classic titles, and delivers products directly to customers' homes.</p>

<h2 id="features">Features</h2>
<ul>
    <li><strong>User Authentication and Authorization:</strong> Secure user registration, login, and role-based access control using Laravel Jetstream</li>
    <li><strong>Product Management:</strong> Admin interface for adding, editing, and deleting video game listings.</li>
    <li><strong>Shopping Cart:</strong> Users can add, remove, and update products in their shopping cart before purchasing. Cart made with <a href="https://github.com/darryldecode/laravelshoppingcart">darryldecode/cart class</a></li>
    <li><strong>Order Management:</strong> Track and manage orders with ease.</li>
    <li><strong>Real-time Updates:</strong> Using Livewire for dynamic interactions without page reloads.</li>
    <li><strong>Responsive Design:</strong> Ensures a seamless experience on both desktop and mobile devices.</li>
</ul>

<h2 id="technologies-used">Technologies Used</h2>
<ul>
    <li><strong>Backend:</strong> Laravel (PHP framework)</li>
    <li><strong>Frontend:</strong> Blade templates, Tailwind CSS, Livewire</li>
    <li><strong>Database:</strong> MySQL</li>
</ul>

<h2 id="installation">Installation</h2>
<p>To set up the project locally, follow these steps:</p>
<ol>
    <li><strong>Clone the Repository:</strong>
        <pre><code>git clone https://github.com/Victor-Jimenez-Morales/GameVille.git
cd GameVille</code></pre>
    </li>
    <li><strong>Install Dependencies:</strong>
        <pre><code>composer install
npm install</code></pre>
    </li>
    <li><strong>Environment Setup:</strong>
        <p>Copy the <code>.env.example</code> file to <code>.env</code> and configure your database and other environment variables.</p>
        <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
    </li>
    <li><strong>Database Migration:</strong>
        <p>Run the following command to set up the database schema.</p>
        <pre><code>php artisan migrate --seed</code></pre>
    </li>
    <li><strong>Storage Link:</strong>
        <p>Create a symbolic link to the storage directory.</p>
        <pre><code>php artisan storage:link</code></pre>
    </li>
    <li><strong>Run the Application:</strong>
        <p>Start the development server.</p>
        <pre><code>php artisan serve
npm run dev</code></pre>
    </li>
</ol>

<h2 id="usage">Usage</h2>
<ul>
    <li><strong>Admin Panel:</strong> Access the admin panel at <code>/admin</code> to manage products, categories, genres, platforms, and users. Default admin user -> Email:admin@gmail.com Password:admin123</li>
    <li><strong>User Registration and Login:</strong> Users can register and log in to browse and purchase video games.</li>
    <li><strong>Shopping Cart:</strong> Add games to the cart, update quantities, and proceed to checkout.</li>
</ul>

<h2 id="contributing">Contributing</h2>
<p>Contributions are welcome! Please follow these steps to contribute:</p>
<ol>
    <li>Fork the repository.</li>
    <li>Create a new branch (<code>git checkout -b feature/your-feature</code>).</li>
    <li>Commit your changes (<code>git commit -m 'Add some feature'</code>).</li>
    <li>Push to the branch (<code>git push origin feature/your-feature</code>).</li>
    <li>Open a pull request.</li>
</ol>

<h2 id="license">License</h2>
<p>This project is licensed under the MIT License. See the <code>LICENSE</code> file for details.</p>

<p>Feel free to reach out with any questions or feedback. Enjoy using GameVille!</p>

</body>
</html>
