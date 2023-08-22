CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    hashed_password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL
);

CREATE TABLE consignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status ENUM('created', 'processing', 'delivered') NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    log_message TEXT NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

