# HSL Labs — Front-End Designer Assignment

## Project Overview
This repository contains the **Daily Operations Dashboard** (Command Center) for HSL Labs. The goal was to build a clean, modern, and fully responsive dashboard using Laravel Blade and Tailwind CSS.

### Quick Access
- **Main Dashboard**: [http://localhost:8000/](http://localhost:8000/)
- **Components Folder**: `/resources/views/components/`
- **Rationale Document**: [RATIONALE.md](./RATIONALE.md)
- **Hi-Fi Design Reference**: `/design/hifi/final_design.png`

## Key Features
- **4+ KPI Cards**: Live metrics with color-coded status indicators.
- **4 Analytics Widgets**: Custom SVG-based charts (Patient Flow, Task Status, Inventory, Sales).
- **Action Tracker Table**: High-density grid with smart filtering and status capsules.
- **Full Responsiveness**: 
    - **Desktop**: Fixed Sidebar + Header.
    - **Adaptive Menu**: Fixed bottom Quick Actions Bar for mobile/tablet.
- **Blade Component Library**: 
    - `<x-sidebar />`
    - `<x-header />`
    - `<x-kpi-card />`
    - `<x-analytics-card />`
    - `<x-smart-filter />`

## Installation & Setup
1. **Clone the repo**:
   ```bash
   git clone <repository-link>
   cd hsl-labs-dashboard
   ```
2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```
3. **Environment Setup**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Run the Application**:
   ```bash
   npm run dev
   # In a separate terminal
   php artisan serve
   ```

## Folder Structure
```text
/resources/views/dashboard.blade.php  # Main Dashboard View
/resources/views/components/           # Reusable Blade Components
/design/wireframes/                    # Low-fidelity blueprints
/design/hifi/                         # High-fidelity design references
/README.md                             # Project overview
/RATIONALE.md                          # UX and Technical rationale
```

## UI/UX Highlights
- **Smart Filtering**: Interactive pill filters for clinical, admin, and inventory views.
- **Micro-interactions**: Hover effects on cards and table rows for better feedback.
- **Mobile-First**: A dedicated bottom navigation bar for mobile users to ensure one-handed usability.
