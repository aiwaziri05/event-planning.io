-- EventPlan Pro Database Schema

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'Planner',
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS venues (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255),
    capacity INT,
    price_per_day DECIMAL(10, 2),
    rating DECIMAL(2, 1),
    image_url VARCHAR(255),
    is_featured BOOLEAN DEFAULT FALSE
);

CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    venue_id INT,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(100),
    start_date DATETIME,
    end_date DATETIME,
    status ENUM('Planned', 'In Progress', 'Completed') DEFAULT 'Planned',
    reference_number VARCHAR(20) UNIQUE,
    image_url VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (venue_id) REFERENCES venues(id)
);

CREATE TABLE IF NOT EXISTS guests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    full_name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    rsvp_status ENUM('Confirmed', 'Pending', 'Declined') DEFAULT 'Pending',
    FOREIGN KEY (event_id) REFERENCES events(id)
);

CREATE TABLE IF NOT EXISTS budget_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    category VARCHAR(100),
    description TEXT,
    estimated_cost DECIMAL(10, 2),
    actual_cost DECIMAL(10, 2),
    status ENUM('Paid', 'Partial', 'Pending', 'Unpaid') DEFAULT 'Unpaid',
    FOREIGN KEY (event_id) REFERENCES events(id)
);

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    description TEXT,
    due_date DATE,
    priority ENUM('High', 'Medium', 'Low') DEFAULT 'Medium',
    is_completed BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (event_id) REFERENCES events(id)
);

CREATE TABLE IF NOT EXISTS activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    event_id INT,
    description TEXT,
    type VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (event_id) REFERENCES events(id)
);

CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    payment_date DATE,
    reference_number VARCHAR(50) UNIQUE,
    method VARCHAR(50),
    amount DECIMAL(10, 2),
    status ENUM('Completed', 'Pending', 'Failed') DEFAULT 'Pending',
    FOREIGN KEY (event_id) REFERENCES events(id)
);

-- Sample Data

-- Users
INSERT INTO users (full_name, email, password, role, image_url) VALUES
('Alex Thompson', 'alex.thompson@eventpro.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Senior Event Planner', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCjXMo33FHGMr0w17obB2YIXEny5zjda96O-Xe0_LePwVSgCabTBWdgbEIbGIIAD0SWN6GwKDRmiqoAF5J3GzIbvuSrTI4ycYZyA_UnzeErWZyeFi--bWMhVAYz-AcuDx0g7qDvoHY0Q-X4CrpDWRmOg2hvI3sFS9WZA1nl0QRyJXpmXGMMI8K3nITpHhJwuUULbNo59CHjRIYL9kuIFpZg5UFe52kXWHWnmenUqZqzV5rDmD0gca_VHHhJHVWiy04vbLCDrQnc-Xw_');

-- Venues
INSERT INTO venues (name, location, capacity, price_per_day, rating, image_url, is_featured) VALUES
('Grand Hyatt Conference Center', 'Downtown, Cityville', 1500, 5000.00, 4.8, 'https://lh3.googleusercontent.com/aida-public/AB6AXuAxa6x9kHBKRsU7CTDME_lXQsIoFAXg1Gvhn4IAKRQZn9Q9RbmnlYwDuszBL87GJwLF4uNzgttATlE8Qd84elxvrEPaBQ4VyhETQFKsIx2muZrDmUuwSTnsgH_Pgyg3K3w4IH10v-AdmmX3he4MNSPW5a95ZDQaU5kNXvn2IoJd03zumLEfyRiwbRSZTn7BN6CRk6V-56imdY393KXlu_9UpV7O07kavqMWCXDrUkCY7gM6BerS_4LZjB3yJRa4WbRdRkzmkiGR-KBt', TRUE),
('Riverside Gardens', 'Riverside, Cityville', 500, 2500.00, 4.7, 'https://lh3.googleusercontent.com/aida-public/AB6AXuAsQgeyWZfFs8RIK1qy4zvj8H9lA-m7mtFYJ2r_eZdSffooM244nXN4b504M4SLO9w-kxULDhXvObTpIRQQw-XRt40rroGu9snmYT3NWZ7bgfnuU9R2H-rZGeRqE3-VCljMf6DFct585-gAkGC5quQBFisRS0FqStdo5qURzhqKTlIN517Kki02_SkN4BO8L8sodPb4wGBXcP4fMHuBkbLxA0bMid0B8IjNirJWTfRk04qiKARg0p3GznS4fD2F4A-T2QCFwm-wQcRf', TRUE);

-- Events
INSERT INTO events (user_id, venue_id, name, type, start_date, end_date, status, reference_number, image_url) VALUES
(1, 1, 'Tech Innovate Summit', 'Seminar', DATE_ADD(NOW(), INTERVAL 3 DAY), DATE_ADD(NOW(), INTERVAL 3 DAY), 'Planned', '#EV-9021', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAxa6x9kHBKRsU7CTDME_lXQsIoFAXg1Gvhn4IAKRQZn9Q9RbmnlYwDuszBL87GJwLF4uNzgttATlE8Qd84elxvrEPaBQ4VyhETQFKsIx2muZrDmUuwSTnsgH_Pgyg3K3w4IH10v-AdmmX3he4MNSPW5a95ZDQaU5kNXvn2IoJd03zumLEfyRiwbRSZTn7BN6CRk6V-56imdY393KXlu_9UpV7O07kavqMWCXDrUkCY7gM6BerS_4LZjB3yJRa4WbRdRkzmkiGR-KBt'),
(1, 2, 'Peterson Wedding', 'Wedding', DATE_ADD(NOW(), INTERVAL 7 DAY), DATE_ADD(NOW(), INTERVAL 7 DAY), 'In Progress', '#EV-8842', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAsQgeyWZfFs8RIK1qy4zvj8H9lA-m7mtFYJ2r_eZdSffooM244nXN4b504M4SLO9w-kxULDhXvObTpIRQQw-XRt40rroGu9snmYT3NWZ7bgfnuU9R2H-rZGeRqE3-VCljMf6DFct585-gAkGC5quQBFisRS0FqStdo5qURzhqKTlIN517Kki02_SkN4BO8L8sodPb4wGBXcP4fMHuBkbLxA0bMid0B8IjNirJWTfRk04qiKARg0p3GznS4fD2F4A-T2QCFwm-wQcRf');

-- Tasks
INSERT INTO tasks (event_id, description, due_date, priority, is_completed) VALUES
(1, 'Finalize catering for Tech Summit', CURDATE(), 'High', FALSE),
(1, 'Send invitations to VIP speakers', DATE_SUB(CURDATE(), INTERVAL 1 DAY), 'Medium', TRUE),
(1, 'Review floor plan with venue manager', DATE_ADD(CURDATE(), INTERVAL 1 DAY), 'Medium', FALSE);

-- Activities
INSERT INTO activities (user_id, event_id, description, type, created_at) VALUES
(1, 1, 'Payment Received: $5,200 from Grand Hyatt', 'payment', DATE_SUB(NOW(), INTERVAL 2 HOUR)),
(1, 1, '15 new guests registered for Tech Summit', 'guest', DATE_SUB(NOW(), INTERVAL 5 HOUR)),
(1, 1, 'Sarah Miller updated the budget file', 'update', DATE_SUB(NOW(), INTERVAL 1 DAY)),
(1, 2, 'Invitation draft sent to John Peterson', 'mail', DATE_SUB(NOW(), INTERVAL 2 DAY)),
(1, 2, 'Venue confirmed: Riverside Gardens', 'check', DATE_SUB(NOW(), INTERVAL 3 DAY));

-- Budget Items
INSERT INTO budget_items (event_id, category, description, estimated_cost, actual_cost, status) VALUES
(1, 'Venue', 'Grand Hyatt booking', 5000.00, 5200.00, 'Paid'),
(1, 'Catering', 'Lunch for 200 guests', 8000.00, 0.00, 'Pending'),
(2, 'Venue', 'Riverside Gardens booking', 2500.00, 2500.00, 'Paid');

-- Payments
INSERT INTO payments (event_id, payment_date, reference_number, method, amount, status) VALUES
(1, DATE_SUB(CURDATE(), INTERVAL 1 DAY), '#PAY-992104', 'Wire Transfer', 5200.00, 'Completed'),
(2, DATE_SUB(CURDATE(), INTERVAL 2 DAY), '#PAY-881029', 'Credit Card', 2500.00, 'Completed');

-- Guests
-- 12 Total Events, 450 Total Guests, $25,000 Total Budget, $15,500 Total Payments - based on UI
-- I'll add more guests to Tech Summit
INSERT INTO guests (event_id, full_name, email, phone, rsvp_status) VALUES
(1, 'Jane Doe', 'jane.doe@techcorp.com', '+1 (555) 012-3456', 'Confirmed'),
(1, 'Mark Smith', 'm.smith@innovate.io', '+1 (555) 987-6543', 'Pending'),
(2, 'John Peterson', 'john@peterson.com', '+1 (555) 111-2222', 'Confirmed');
