CREATE TABLE users (
    id INT AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    role ENUM('admin', 'user'),
    PRIMARY KEY (id)
);

CREATE TABLE consignments (
    id INT AUTO_INCREMENT,
    package_id INT,
    status ENUM('pending', 'in transit', 'delivered', 'cancelled'),
    updated_at TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (package_id) REFERENCES packages(id)
);

CREATE TABLE logs (
    id INT AUTO_INCREMENT,
    user_id INT,
    action VARCHAR(255),
    created_at TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

