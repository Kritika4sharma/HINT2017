#define tP 13
#define eP 12
void setup() {
  Serial.begin (9600);
  pinMode(tP, OUTPUT);
  pinMode(eP, INPUT);
}

void loop() {
  long dur, dist;
  digitalWrite(tP, LOW); 
  delayMicroseconds(2); 
  digitalWrite(tP, HIGH);
  delayMicroseconds(10); 
  digitalWrite(tP, LOW);
  dur = pulseIn(eP, HIGH);
  //Serial.println(dur);
  dist = (dur/2) / 29.1;
 // if (dist >= 200 || dist <= 0){
   // Serial.println("Out of bounds");
  //}
  //else {
    Serial.print(dist);
    Serial.println(" cm");
  //}
  delay(500);
}

