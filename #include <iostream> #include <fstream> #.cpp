#include <iostream> #include <fstream> #include <string> using namespace std;
int main() {
string filename; ifstream in_file; string line;
// Ask for the name of the file
cout << "Enter the name of the file: "; getline(cin, filename);
// Open the file in_file.open(filename); if (!in_file) {
cerr << "Error opening file " << filename << endl;
return 1; }
// Display the first 10 lines of the file
int line_count = 0;
while (getline(in_file, line) && line_count < 10) {
cout << line << endl;
line_count++; }
// If the file has fewer than 10 lines, display the entire file if (line_count < 10) {
in_file.clear(); in_file.seekg(0, ios::beg); while (getline(in_file, line)) {
cout << line << endl; }
cout << "(Entire file has been displayed)" << endl; }