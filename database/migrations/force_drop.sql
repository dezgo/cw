-- mysql -u root -p cw < database/migrations/force_drop.sql
use cw;
drop table if exists visitor_tracking;
drop table if exists visitor_locations;
drop table if exists failed_jobs;
drop table if exists jobs;
drop table if exists system_components;
drop table if exists systems;
drop table if exists components;
drop table if exists component_categories;
drop table if exists password_resets;
drop table if exists users;
drop table if exists migrations;
