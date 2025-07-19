# 📝 Mini Blog CMS

A basic content management system for blog posts built using PHP and MySQL. Supports creating, editing, deleting, and listing posts.

## 🛠️ Tech Stack
- PHP
- MySQL
- HTML
- (Optional: CSS/Bootstrap)

## 💡 Features
- Add new blog posts
- Edit and delete existing posts
- View post list
- MySQL backend with real-time storage

## 🗄️ Database Setup

1. Create a MySQL DB named `blog`
2. Run the following SQL:

```sql
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
