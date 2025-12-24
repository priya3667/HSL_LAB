# HSL Labs | Operations Dashboard

A premium, high-fidelity operations dashboard for laboratory management, built with Laravel Blade and Tailwind CSS. This dashboard provides real-time analytics, task tracking, and administrative controls with a focus on mobile responsiveness and clean aesthetics.

## 🚀 Key Features

- **Dynamic Analytics**: Real-time data visualization using ApexCharts (Patient Flow, Task Distribution, Inventory Trends, Sales).
- **Advanced Action Tracker**: High-density table with multi-select, searching, and status-based filtering.
- **Bulk Management**: Integrated systems for bulk editing and deleting entries with custom-designed responsive modals.
- **Date Management**: Fully integrated Flatpickr calendar for global and table-specific date filtering.
- **Mobile-First Design**: Optimized for all screen sizes, including icon-only button transitions on mobile and centered layout components.
- **Interactive UI**: Clean, professional design with smooth transitions, backdrop blurs, and premium typography.

## 🛠️ Technology Stack

- **Framework**: Laravel 10.x (Blade Components)
- **Styling**: Tailwind CSS
- **Charts**: ApexCharts.js
- **Date Picker**: Flatpickr.js
- **Fonts**: Google Fonts (Plus Jakarta Sans, Mulish, Inter, Instrument Sans)

## 💻 Installation & Setup

Follow these steps to get the HSL Labs Dashboard running on your local machine:

1. **Clone the Repository**
   ```bash
   git clone <repository-link>
   cd HSL_LAB
   ```

2. **Install Composer Dependencies**
   ```bash
   composer install
   ```

3. **Configure Environment**
   - Copy the example environment file:
     ```bash
     cp .env.example .env
     ```
   - Generate the application key:
     ```bash
     php artisan key:generate
     ```

4. **Launch the Server**
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```
   Access the dashboard at: `http://localhost:8000`

## 📂 Project Structure

- `resources/views/dashboard.blade.php`: The main entry point and layout for the dashboard.
- `resources/views/components/`: Directory containing all modular Blade components:
  - `header.blade.php`: Responsive search and global date selection.
  - `sidebar.blade.php`: Desktop-optimized navigation.
  - `action-table.blade.php`: The core logic for task management, filtering, and bulk actions.
  - `kpi-card.blade.php`: Reusable metric display cards.
  - `analytics-card.blade.php`: Generic container for ApexCharts widgets.
- `public/images/`: Storage for all custom SVGs and assets used throughout the UI.
